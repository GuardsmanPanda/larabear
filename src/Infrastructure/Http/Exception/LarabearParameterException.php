<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Infrastructure\Http\Exception;

final class LarabearParameterException extends BearException {
    public function __construct(string $parameter, string $detail) {
        parent::__construct(
            title: "Issues with the parameter: $parameter",
            detail: $detail,
            type: 'parameter-exception',
            instance: $parameter,
            status:  400
        );
    }
}
