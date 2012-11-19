<?php



/**
 * This class defines the structure of the 'APP_MESSAGE' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.classes.model.map
 */
class AppMessageTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppMessageTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('APP_MESSAGE');
		$this->setPhpName('AppMessage');
		$this->setClassname('AppMessage');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('APP_MSG_UID', 'AppMsgUid', 'VARCHAR', true, 32, null);
		$this->addColumn('MSG_UID', 'MsgUid', 'VARCHAR', false, 32, null);
		$this->addColumn('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DEL_INDEX', 'DelIndex', 'INTEGER', true, null, 0);
		$this->addColumn('APP_MSG_TYPE', 'AppMsgType', 'VARCHAR', true, 100, '');
		$this->addColumn('APP_MSG_SUBJECT', 'AppMsgSubject', 'VARCHAR', true, 150, '');
		$this->addColumn('APP_MSG_FROM', 'AppMsgFrom', 'VARCHAR', true, 100, '');
		$this->addColumn('APP_MSG_TO', 'AppMsgTo', 'LONGVARCHAR', true, null, null);
		$this->addColumn('APP_MSG_BODY', 'AppMsgBody', 'LONGVARCHAR', true, null, null);
		$this->addColumn('APP_MSG_DATE', 'AppMsgDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_MSG_CC', 'AppMsgCc', 'LONGVARCHAR', false, null, null);
		$this->addColumn('APP_MSG_BCC', 'AppMsgBcc', 'LONGVARCHAR', false, null, null);
		$this->addColumn('APP_MSG_TEMPLATE', 'AppMsgTemplate', 'LONGVARCHAR', false, null, null);
		$this->addColumn('APP_MSG_STATUS', 'AppMsgStatus', 'VARCHAR', false, 20, null);
		$this->addColumn('APP_MSG_ATTACH', 'AppMsgAttach', 'LONGVARCHAR', false, null, null);
		$this->addColumn('APP_MSG_SEND_DATE', 'AppMsgSendDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_MSG_SHOW_MESSAGE', 'AppMsgShowMessage', 'TINYINT', true, null, 1);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppMessageTableMap
