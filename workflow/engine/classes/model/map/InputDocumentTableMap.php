<?php



/**
 * This class defines the structure of the 'INPUT_DOCUMENT' table.
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
class InputDocumentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.InputDocumentTableMap';

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
		$this->setName('INPUT_DOCUMENT');
		$this->setPhpName('InputDocument');
		$this->setClassname('InputDocument');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('INP_DOC_UID', 'InpDocUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('INP_DOC_FORM_NEEDED', 'InpDocFormNeeded', 'VARCHAR', true, 20, 'REAL');
		$this->addColumn('INP_DOC_ORIGINAL', 'InpDocOriginal', 'VARCHAR', true, 20, 'COPY');
		$this->addColumn('INP_DOC_PUBLISHED', 'InpDocPublished', 'VARCHAR', true, 20, 'PRIVATE');
		$this->addColumn('INP_DOC_VERSIONING', 'InpDocVersioning', 'TINYINT', true, null, 0);
		$this->addColumn('INP_DOC_DESTINATION_PATH', 'InpDocDestinationPath', 'LONGVARCHAR', false, null, null);
		$this->addColumn('INP_DOC_TAGS', 'InpDocTags', 'LONGVARCHAR', false, null, null);
		// validators
		$this->addValidator('INP_DOC_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Input Document UID can be no larger than 32 in size');
		$this->addValidator('INP_DOC_UID', 'required', 'propel.validator.RequiredValidator', '', 'Input Document UID is required.');
		$this->addValidator('PRO_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process UID can be no larger than 32 in size');
		$this->addValidator('PRO_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process UID is required.');
		$this->addValidator('INP_DOC_FORM_NEEDED', 'validValues', 'propel.validator.ValidValuesValidator', 'VIRTUAL|REAL|VREAL', 'Please select a valid document format.');
		$this->addValidator('INP_DOC_FORM_NEEDED', 'required', 'propel.validator.RequiredValidator', '', 'Document format is required.');
		$this->addValidator('INP_DOC_ORIGINAL', 'validValues', 'propel.validator.ValidValuesValidator', 'COPY|ORIGINAL|COPYLEGAL|FINAL', 'Please select a valid document format type.');
		$this->addValidator('INP_DOC_ORIGINAL', 'required', 'propel.validator.RequiredValidator', '', 'Document format type is required.');
		$this->addValidator('INP_DOC_PUBLISHED', 'validValues', 'propel.validator.ValidValuesValidator', 'PUBLIC|PRIVATE', 'Please select a valid document access.');
		$this->addValidator('INP_DOC_PUBLISHED', 'required', 'propel.validator.RequiredValidator', '', 'Document access is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // InputDocumentTableMap
