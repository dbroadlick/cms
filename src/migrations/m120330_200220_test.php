<?php
namespace Blocks;

/**
 * The class name is the UTC timestamp in the format of mYYMMDD_HHMMSS_migrationName
 */
class m120330_200220_test extends \CDbMigration
{
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 */
	public function safeUp()
	{
		$this->addColumn('info', 'test', AttributeType::Int);
	}
}
