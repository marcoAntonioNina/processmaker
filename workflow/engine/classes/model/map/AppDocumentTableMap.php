<?php



/**
 * This class defines the structure of the 'APP_DOCUMENT' table.
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
class AppDocumentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.AppDocumentTableMap';

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
		$this->setName('APP_DOCUMENT');
		$this->setPhpName('AppDocument');
		$this->setClassname('AppDocument');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('APP_DOC_UID', 'AppDocUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('DOC_VERSION', 'DocVersion', 'INTEGER', true, null, 1);
		$this->addColumn('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DEL_INDEX', 'DelIndex', 'INTEGER', true, null, 0);
		$this->addColumn('DOC_UID', 'DocUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('APP_DOC_TYPE', 'AppDocType', 'VARCHAR', true, 32, '');
		$this->addColumn('APP_DOC_CREATE_DATE', 'AppDocCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('APP_DOC_INDEX', 'AppDocIndex', 'INTEGER', true, null, null);
		$this->addColumn('FOLDER_UID', 'FolderUid', 'VARCHAR', false, 32, '');
		$this->addColumn('APP_DOC_PLUGIN', 'AppDocPlugin', 'VARCHAR', false, 150, '');
		$this->addColumn('APP_DOC_TAGS', 'AppDocTags', 'LONGVARCHAR', false, null, null);
		$this->addColumn('APP_DOC_STATUS', 'AppDocStatus', 'VARCHAR', true, 32, 'ACTIVE');
		$this->addColumn('APP_DOC_STATUS_DATE', 'AppDocStatusDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('APP_DOC_FIELDNAME', 'AppDocFieldname', 'VARCHAR', false, 150, null);
		// validators
		$this->addValidator('APP_DOC_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Application Document UID can be no larger than 32 in size');
		$this->addValidator('APP_DOC_UID', 'required', 'propel.validator.RequiredValidator', '', 'Application Document UID is required.');
		$this->addValidator('APP_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Application UID can be no larger than 32 in size');
		$this->addValidator('APP_UID', 'required', 'propel.validator.RequiredValidator', '', 'Application UID is required.');
		$this->addValidator('DEL_INDEX', 'minValue', 'propel.validator.MinValueValidator', '1', 'Delegation Index must be greater than 0');
		$this->addValidator('DEL_INDEX', 'required', 'propel.validator.RequiredValidator', '', 'Delegation Index is required.');
		$this->addValidator('DOC_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Document UID can be no larger than 32 in size');
		$this->addValidator('DOC_UID', 'required', 'propel.validator.RequiredValidator', '', 'Document UID (building block) is required.');
		$this->addValidator('USR_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'User UID can be no larger than 32 in size');
		$this->addValidator('USR_UID', 'required', 'propel.validator.RequiredValidator', '', 'User UID is required.');
		$this->addValidator('APP_DOC_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'INPUT|OUTPUT|ATTACHED', 'Please select a valid document type.');
		$this->addValidator('APP_DOC_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Application Document Type is required.');
		$this->addValidator('APP_DOC_CREATE_DATE', 'required', 'propel.validator.RequiredValidator', '', 'Application Document Creation Date is required.');
		$this->addValidator('APP_DOC_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'ACTIVE|DELETED', 'Please select a valid document status (ACTIVE|DELETED).');
		$this->addValidator('APP_DOC_STATUS', 'required', 'propel.validator.RequiredValidator', '', 'Application Document Status is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AppDocumentTableMap
