<?php


namespace Tests\Validation;


use Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

class ADATest extends BaseValidationTestCase
{

    public function getValidationInstance(): Validation
    {
        return Validation::make('ADA');
    }

    public function addressProvider()
    {
        return [
            ['addr1v8v3auqmw0eszza3ww29ea2pwftuqrqqyu26zvzjq9dt2ncydzvs5', true],
            ['DdzFFzCqrht2KYLcX8Vu53urCG52NxpgrGQvP9Mcp15Q8BkB9df9GndFDBRjoWTPuNkLW3yeQiFVet1KA7mraEkJ84AK2RwcEh3khs12', true],
            ['addr_test1qp3a5h2v77amavax2qh9z47jxp0hwr22e2285l5d5akehhs8a9exu0g55mhg8csra7q7686wdmrpcyhjc7gjj4m0ryesevy4gl', true],
            ['qrll76p3mfl69p07vyvqzwy3crqy8myvrytgv8v7f7', false],
            ['pruptvpkmxamee0f72sq40gm70wfr624zq0yyxtycm', false],
            ['LbTjMGN7gELw4KbeyQf6cTCq859hD18guE', false],
        ];
    }
}
