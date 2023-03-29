<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Credential\Controller;

use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearArrayService;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\Sql;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Crud\BearExternalApiCreator;
use GuardsmanPanda\Larabear\Integration\ExternalApi\Enum\BearExternalApiTypeEnum;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

final class LarabearExternalApiController extends Controller {
    public function index(): View {
        return Resp::view(view: 'larabear-credential::external.index', data: [
            'external_apis' => DB::select(query: "SELECT * FROM bear_external_api ORDER BY external_api_slug"),
        ]);
    }

    public function createDialog(): View {
        return Resp::view(view: 'larabear-credential::external.create', data: [
            'external_api_types' => BearArrayService::enumCasesToKeyValueArray(BearExternalApiTypeEnum::cases()),
            'oauth2_clients' => Sql::toKeyValueArray(sql: "SELECT oauth2_client_id, oauth2_client_slug FROM bear_oauth2_client ORDER BY oauth2_client_id"),
            'oauth2_users' => Sql::toKeyValueArray(sql: "
                SELECT
                    ou.id, CONCAT(ou.id, ' - ', oc.oauth2_client_slug, '[' , u.user_display_name, ']')
                FROM bear_oauth2_user ou
                LEFT JOIN bear_oauth2_client oc ON oc.oauth2_client_id = ou.oauth2_client_id
                LEFT JOIN bear_user u ON u.id = ou.user_id
                ORDER BY ou.oauth2_client_id, u.user_display_name, ou.id
            "),
        ]);
    }

    public function create(): View {
        $type = BearExternalApiTypeEnum::from(Req::getStringOrDefault(key: 'external_api_type'));
        if (Req::getString(key: 'external_api_base_url') === null && Req::getString(key: 'oauth2_user_id') === null && Req::getString(key: 'oauth2_client_id') === null) {
            throw new BadRequestHttpException(message: 'external_api_base_url is required when oauth2_user_id and oauth2_client_id are not provided');
        }
        if ($type === BearExternalApiTypeEnum::OAUTH2 && Req::getString(key: 'oauth2_user_id') === null) {
            throw new BadRequestHttpException(message: 'oauth2_user_id is required when external_api_type is OAUTH2');
        }
        if ($type === BearExternalApiTypeEnum::OAUTH2_CLIENT && Req::getString(key: 'oauth2_client_id') === null) {
            throw new BadRequestHttpException(message: 'oauth2_client_id is required when external_api_type is OAUTH2_CLIENT');
        }
        BearExternalApiCreator::create(
            external_api_slug: Req::getStringOrDefault(key: 'external_api_slug'),
            external_api_description: Req::getStringOrDefault(key: 'external_api_description'),
            external_api_type: $type,
            encrypted_external_api_token: Req::getString(key: 'encrypted_external_api_token'),
            external_api_base_url: Req::getString(key: 'external_api_base_url'),
            oauth2_user_id: Req::getString(key: 'oauth2_user_id'),
            oauth2_client_id: Req::getString(key: 'oauth2_client_id'),
        );
        return $this->index();
    }
}
