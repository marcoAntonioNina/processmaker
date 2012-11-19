<?php



/**
 * This class defines the structure of the 'OUTPUT_DOCUMENT' table.
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
class OutputDocumentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.OutputDocumentTableMap';

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
		$this->setName('OUTPUT_DOCUMENT');
		$this->setPhpName('OutputDocument');
		$this->setClassname('OutputDocument');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('OUT_DOC_UID', 'OutDocUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('OUT_DOC_REPORT_GENERATOR', 'OutDocReportGenerator', 'VARCHAR', true, 10, 'HTML2PDF');
		$this->addColumn('OUT_DOC_LANDSCAPE', 'OutDocLandscape', 'TINYINT', true, null, 0);
		$this->addColumn('OUT_DOC_MEDIA', 'OutDocMedia', 'VARCHAR', true, 10, 'Letter');
		$this->addColumn('OUT_DOC_LEFT_MARGIN', 'OutDocLeftMargin', 'INTEGER', false, null, 30);
		$this->addColumn('OUT_DOC_RIGHT_MARGIN', 'OutDocRightMargin', 'INTEGER', false, null, 15);
		$this->addColumn('OUT_DOC_TOP_MARGIN', 'OutDocTopMargin', 'INTEGER', false, null, 15);
		$this->addColumn('OUT_DOC_BOTTOM_MARGIN', 'OutDocBottomMargin', 'INTEGER', false, null, 15);
		$this->addColumn('OUT_DOC_GENERATE', 'OutDocGenerate', 'VARCHAR', true, 10, 'BOTH');
		$this->addColumn('OUT_DOC_TYPE', 'OutDocType', 'VARCHAR', true, 32, 'HTML');
		$this->addColumn('OUT_DOC_CURRENT_REVISION', 'OutDocCurrentRevision', 'INTEGER', false, null, 0);
		$this->addColumn('OUT_DOC_FIELD_MAPPING', 'OutDocFieldMapping', 'LONGVARCHAR', false, null, null);
		$this->addColumn('OUT_DOC_VERSIONING', 'OutDocVersioning', 'TINYINT', true, null, 0);
		$this->addColumn('OUT_DOC_DESTINATION_PATH', 'OutDocDestinationPath', 'LONGVARCHAR', false, null, null);
		$this->addColumn('OUT_DOC_TAGS', 'OutDocTags', 'LONGVARCHAR', false, null, null);
		$this->addColumn('OUT_DOC_PDF_SECURITY_ENABLED', 'OutDocPdfSecurityEnabled', 'TINYINT', false, null, 0);
		$this->addColumn('OUT_DOC_PDF_SECURITY_OPEN_PASSWORD', 'OutDocPdfSecurityOpenPassword', 'VARCHAR', false, 32, '');
		$this->addColumn('OUT_DOC_PDF_SECURITY_OWNER_PASSWORD', 'OutDocPdfSecurityOwnerPassword', 'VARCHAR', false, 32, '');
		$this->addColumn('OUT_DOC_PDF_SECURITY_PERMISSIONS', 'OutDocPdfSecurityPermissions', 'VARCHAR', false, 150, '');
		// validators
		$this->addValidator('OUT_DOC_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Output Document UID can be no larger than 32 in size');
		$this->addValidator('OUT_DOC_UID', 'required', 'propel.validator.RequiredValidator', '', 'Output Document UID is required.');
		$this->addValidator('PRO_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process UID can be no larger than 32 in size');
		$this->addValidator('PRO_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process UID is required.');
		$this->addValidator('OUT_DOC_GENERATE', 'validValues', 'propel.validator.ValidValuesValidator', 'BOTH|DOC|PDF', 'Please select a outputdocument.');
		$this->addValidator('OUT_DOC_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'HTML|ITEXT|JRXML|ACROFORM', 'Please select a valid Output Document Type.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // OutputDocumentTableMap
