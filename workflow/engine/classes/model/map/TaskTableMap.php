<?php



/**
 * This class defines the structure of the 'TASK' table.
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
class TaskTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.TaskTableMap';

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
		$this->setName('TASK');
		$this->setPhpName('Task');
		$this->setClassname('Task');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_TYPE', 'TasType', 'VARCHAR', true, 20, 'NORMAL');
		$this->addColumn('TAS_DURATION', 'TasDuration', 'DOUBLE', true, null, 0);
		$this->addColumn('TAS_DELAY_TYPE', 'TasDelayType', 'VARCHAR', true, 30, '');
		$this->addColumn('TAS_TEMPORIZER', 'TasTemporizer', 'DOUBLE', true, null, 0);
		$this->addColumn('TAS_TYPE_DAY', 'TasTypeDay', 'CHAR', true, 1, '1');
		$this->addColumn('TAS_TIMEUNIT', 'TasTimeunit', 'VARCHAR', true, 20, 'DAYS');
		$this->addColumn('TAS_ALERT', 'TasAlert', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_PRIORITY_VARIABLE', 'TasPriorityVariable', 'VARCHAR', true, 100, '');
		$this->addColumn('TAS_ASSIGN_TYPE', 'TasAssignType', 'VARCHAR', true, 30, 'BALANCED');
		$this->addColumn('TAS_ASSIGN_VARIABLE', 'TasAssignVariable', 'VARCHAR', true, 100, '@@SYS_NEXT_USER_TO_BE_ASSIGNED');
		$this->addColumn('TAS_GROUP_VARIABLE', 'TasGroupVariable', 'VARCHAR', false, 100, '@@SYS_GROUP_TO_BE_ASSIGNED');
		$this->addColumn('TAS_MI_INSTANCE_VARIABLE', 'TasMiInstanceVariable', 'VARCHAR', true, 100, '@@SYS_VAR_TOTAL_INSTANCE');
		$this->addColumn('TAS_MI_COMPLETE_VARIABLE', 'TasMiCompleteVariable', 'VARCHAR', true, 100, '@@SYS_VAR_TOTAL_INSTANCES_COMPLETE');
		$this->addColumn('TAS_ASSIGN_LOCATION', 'TasAssignLocation', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_ASSIGN_LOCATION_ADHOC', 'TasAssignLocationAdhoc', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_TRANSFER_FLY', 'TasTransferFly', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_LAST_ASSIGNED', 'TasLastAssigned', 'VARCHAR', true, 32, '0');
		$this->addColumn('TAS_USER', 'TasUser', 'VARCHAR', true, 32, '0');
		$this->addColumn('TAS_CAN_UPLOAD', 'TasCanUpload', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_VIEW_UPLOAD', 'TasViewUpload', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_VIEW_ADDITIONAL_DOCUMENTATION', 'TasViewAdditionalDocumentation', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_CAN_CANCEL', 'TasCanCancel', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_OWNER_APP', 'TasOwnerApp', 'VARCHAR', true, 32, '');
		$this->addColumn('STG_UID', 'StgUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_CAN_PAUSE', 'TasCanPause', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_CAN_SEND_MESSAGE', 'TasCanSendMessage', 'VARCHAR', true, 20, 'TRUE');
		$this->addColumn('TAS_CAN_DELETE_DOCS', 'TasCanDeleteDocs', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_SELF_SERVICE', 'TasSelfService', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_START', 'TasStart', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_TO_LAST_USER', 'TasToLastUser', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('TAS_SEND_LAST_EMAIL', 'TasSendLastEmail', 'VARCHAR', true, 20, 'TRUE');
		$this->addColumn('TAS_DERIVATION', 'TasDerivation', 'VARCHAR', true, 100, 'NORMAL');
		$this->addColumn('TAS_POSX', 'TasPosx', 'INTEGER', true, null, 0);
		$this->addColumn('TAS_POSY', 'TasPosy', 'INTEGER', true, null, 0);
		$this->addColumn('TAS_WIDTH', 'TasWidth', 'INTEGER', true, null, 110);
		$this->addColumn('TAS_HEIGHT', 'TasHeight', 'INTEGER', true, null, 60);
		$this->addColumn('TAS_COLOR', 'TasColor', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_EVN_UID', 'TasEvnUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_BOUNDARY', 'TasBoundary', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_DERIVATION_SCREEN_TPL', 'TasDerivationScreenTpl', 'VARCHAR', false, 128, '');
		$this->addColumn('TAS_SELFSERVICE_TIMEOUT', 'TasSelfserviceTimeout', 'INTEGER', false, null, 0);
		$this->addColumn('TAS_SELFSERVICE_TIME', 'TasSelfserviceTime', 'VARCHAR', false, 15, '');
		$this->addColumn('TAS_SELFSERVICE_TIME_UNIT', 'TasSelfserviceTimeUnit', 'VARCHAR', false, 15, '');
		$this->addColumn('TAS_SELFSERVICE_TRIGGER_UID', 'TasSelfserviceTriggerUid', 'VARCHAR', false, 32, '');
		// validators
		$this->addValidator('TAS_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'NORMAL|ADHOC|SUBPROCESS|HIDDEN', 'Please select a valid value for TAS_TYPE.');
		$this->addValidator('TAS_TIMEUNIT', 'validValues', 'propel.validator.ValidValuesValidator', 'MINUTES|HOURS|DAYS|WEEKS|MONTHS', 'Please select a valid value for TAS_TIMEUNIT.');
		$this->addValidator('TAS_ALERT', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_ALERT.');
		$this->addValidator('TAS_ASSIGN_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'BALANCED|MANUAL|EVALUATE|REPORT_TO|SELF_SERVICE|STATIC_MI|CANCEL_MI', 'Please select a valid value for TAS_ASSIGN_TYPE.');
		$this->addValidator('TAS_ASSIGN_LOCATION', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_ASSIGN_LOCATION.');
		$this->addValidator('TAS_ASSIGN_LOCATION_ADHOC', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_ASSIGN_LOCATION_ADHOC.');
		$this->addValidator('TAS_TRANSFER_FLY', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_TRANSFER_FLY.');
		$this->addValidator('TAS_CAN_UPLOAD', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_CAN_UPLOAD.');
		$this->addValidator('TAS_VIEW_UPLOAD', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_VIEW_UPLOAD.');
		$this->addValidator('TAS_VIEW_ADDITIONAL_DOCUMENTATION', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_VIEW_ADDITIONAL_DOCUMENTATION.');
		$this->addValidator('TAS_CAN_CANCEL', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_CAN_CANCEL.');
		$this->addValidator('TAS_CAN_PAUSE', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_CAN_PAUSE.');
		$this->addValidator('TAS_CAN_SEND_MESSAGE', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_CAN_SEND_MESSAGE.');
		$this->addValidator('TAS_CAN_DELETE_DOCS', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|VIEW|FALSE', 'Please select a valid value for TAS_CAN_DELETE_DOCS.');
		$this->addValidator('TAS_SELF_SERVICE', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_SELF_SERVICE.');
		$this->addValidator('TAS_START', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_START.');
		$this->addValidator('TAS_TO_LAST_USER', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_TO_LAST_USER.');
		$this->addValidator('TAS_SEND_LAST_EMAIL', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid value for TAS_SEND_LAST_EMAIL.');
		$this->addValidator('TAS_DERIVATION', 'validValues', 'propel.validator.ValidValuesValidator', 'NORMAL|FAST|AUTOMATIC', 'Please select a valid value for TAS_DERIVATION.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // TaskTableMap
