<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Auth\Crud;

use Carbon\CarbonInterface;
use GuardsmanPanda\Larabear\Infrastructure\App\Service\BearRegexService;
use GuardsmanPanda\Larabear\Infrastructure\Auth\Model\BearUser;
use Illuminate\Support\Facades\Hash;

final readonly class BearUserUpdater {
    public function __construct(private BearUser $model) {}

    public static function fromId(string $id): BearUserUpdater {
        return new BearUserUpdater(model: BearUser::findOrFail(id: $id));
    }


    public function setDisplayName(string $display_name): self {
        $this->model->display_name = trim($display_name);
        return $this;
    }

    public function setEmail(string|null $email): self {
        if ($email !== null) {
            $email = trim($email);
        }
        $this->model->email = $email;
        return $this;
    }

    public function setCountryCca2(string|null $country_cca2): self {
        $this->model->country_cca2 = $country_cca2;
        return $this;
    }

    public function setPassword(string|null $password): self {
        $this->model->password = $password !== null ? Hash::make($password) : null;
        return $this;
    }

    public function setRememberToken(string|null $remember_token): self {
        $this->model->remember_token = $remember_token;
        return $this;
    }


    public function setLastLoginNow(): self {
        $this->model->last_login_at = now();
        return $this;
    }


    public function update(): BearUser {
        $this->model->save();
        return $this->model;
    }
}
