<?php

class FinancialTransactionsRuTest extends \PHPUnit\Framework\TestCase
{
	public function getValidateFailSamples(): array
	{
		return [
			'empty' => [
				[],
			],
			'filled but empty' => [
				[
					'Name' => '',
					'PersonalAcc' => '',
					'BankName' => '',
					'BIC' => '',
					'CorrespAcc' => '',
				]
			],
			'filled but invalid' => [
				[
					'Name' => false,
					'PersonalAcc' => new AppendIterator(),
					'BankName' => (object)'object',
					'BIC' => true,
					'CorrespAcc' => [
					'key' => 'value',
					],
				],
			],
		];
	}
	public function getValidateSuccessSamples(): array
	{
		return [
			'data' => [
				[
					'Name' => 'Name',
					'PersonalAcc' => 'PersonalAcc',
					'BankName' => 'BankName',
					'BIC' => 'BIC',
					'CorrespAcc' => 'CorrespAcc',
				],
			],
		];
	}

	/**
	 * @dataProvider getValidateFailSamples
	 *
	 * @param array $fields
	 */
	public function testValidateFail(array $fields): void
	{
		$dataGenerator = new \App\DataGenerator\FinancialTransactionsRu();

		$dataGenerator->setFields($fields);

		$result = $dataGenerator->validate();

		static::assertFalse($result->isSuccess());
	}

	public function testThatValidateSuccess(): void
	{
		$dataGenerator = new \App\DataGenerator\FinancialTransactionsRu();

		$dataGenerator->setFields([]);

		$dataGenerator
			->setName('Name')
			->setBIC('BIC')
			->setBankName('BankName')
			->setCorrespondentAccount('CorrespondentAccount')
			->setPersonalAccount('CorrespondentAccount')
		;

		$result = $dataGenerator->validate();

		static::assertTrue($result->isSuccess());
	}

	public function testGetData(): void
	{
		$dataGenerator = new \App\DataGenerator\FinancialTransactionsRu();

		$dataGenerator->setFields([]);

		$data = $dataGenerator->getData();

		static::assertEquals('ST00012|Name=|PersonalAcc=|BankName=|BIC=|CorrespAcc=', $data);
	}
}
