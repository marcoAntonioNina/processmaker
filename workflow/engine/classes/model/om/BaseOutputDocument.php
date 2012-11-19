<?php


/**
 * Base class that represents a row from the 'OUTPUT_DOCUMENT' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseOutputDocument extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'OutputDocumentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        OutputDocumentPeer
	 */
	protected static $peer;

	/**
	 * The value for the out_doc_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $out_doc_uid;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the out_doc_report_generator field.
	 * Note: this column has a database default value of: 'HTML2PDF'
	 * @var        string
	 */
	protected $out_doc_report_generator;

	/**
	 * The value for the out_doc_landscape field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $out_doc_landscape;

	/**
	 * The value for the out_doc_media field.
	 * Note: this column has a database default value of: 'Letter'
	 * @var        string
	 */
	protected $out_doc_media;

	/**
	 * The value for the out_doc_left_margin field.
	 * Note: this column has a database default value of: 30
	 * @var        int
	 */
	protected $out_doc_left_margin;

	/**
	 * The value for the out_doc_right_margin field.
	 * Note: this column has a database default value of: 15
	 * @var        int
	 */
	protected $out_doc_right_margin;

	/**
	 * The value for the out_doc_top_margin field.
	 * Note: this column has a database default value of: 15
	 * @var        int
	 */
	protected $out_doc_top_margin;

	/**
	 * The value for the out_doc_bottom_margin field.
	 * Note: this column has a database default value of: 15
	 * @var        int
	 */
	protected $out_doc_bottom_margin;

	/**
	 * The value for the out_doc_generate field.
	 * Note: this column has a database default value of: 'BOTH'
	 * @var        string
	 */
	protected $out_doc_generate;

	/**
	 * The value for the out_doc_type field.
	 * Note: this column has a database default value of: 'HTML'
	 * @var        string
	 */
	protected $out_doc_type;

	/**
	 * The value for the out_doc_current_revision field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $out_doc_current_revision;

	/**
	 * The value for the out_doc_field_mapping field.
	 * @var        string
	 */
	protected $out_doc_field_mapping;

	/**
	 * The value for the out_doc_versioning field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $out_doc_versioning;

	/**
	 * The value for the out_doc_destination_path field.
	 * @var        string
	 */
	protected $out_doc_destination_path;

	/**
	 * The value for the out_doc_tags field.
	 * @var        string
	 */
	protected $out_doc_tags;

	/**
	 * The value for the out_doc_pdf_security_enabled field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $out_doc_pdf_security_enabled;

	/**
	 * The value for the out_doc_pdf_security_open_password field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $out_doc_pdf_security_open_password;

	/**
	 * The value for the out_doc_pdf_security_owner_password field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $out_doc_pdf_security_owner_password;

	/**
	 * The value for the out_doc_pdf_security_permissions field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $out_doc_pdf_security_permissions;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->out_doc_uid = '';
		$this->pro_uid = '';
		$this->out_doc_report_generator = 'HTML2PDF';
		$this->out_doc_landscape = 0;
		$this->out_doc_media = 'Letter';
		$this->out_doc_left_margin = 30;
		$this->out_doc_right_margin = 15;
		$this->out_doc_top_margin = 15;
		$this->out_doc_bottom_margin = 15;
		$this->out_doc_generate = 'BOTH';
		$this->out_doc_type = 'HTML';
		$this->out_doc_current_revision = 0;
		$this->out_doc_versioning = 0;
		$this->out_doc_pdf_security_enabled = 0;
		$this->out_doc_pdf_security_open_password = '';
		$this->out_doc_pdf_security_owner_password = '';
		$this->out_doc_pdf_security_permissions = '';
	}

	/**
	 * Initializes internal state of BaseOutputDocument object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [out_doc_uid] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocUid()
	{
		return $this->out_doc_uid;
	}

	/**
	 * Get the [pro_uid] column value.
	 * 
	 * @return     string
	 */
	public function getProUid()
	{
		return $this->pro_uid;
	}

	/**
	 * Get the [out_doc_report_generator] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocReportGenerator()
	{
		return $this->out_doc_report_generator;
	}

	/**
	 * Get the [out_doc_landscape] column value.
	 * 
	 * @return     int
	 */
	public function getOutDocLandscape()
	{
		return $this->out_doc_landscape;
	}

	/**
	 * Get the [out_doc_media] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocMedia()
	{
		return $this->out_doc_media;
	}

	/**
	 * Get the [out_doc_left_margin] column value.
	 * 
	 * @return     int
	 */
	public function getOutDocLeftMargin()
	{
		return $this->out_doc_left_margin;
	}

	/**
	 * Get the [out_doc_right_margin] column value.
	 * 
	 * @return     int
	 */
	public function getOutDocRightMargin()
	{
		return $this->out_doc_right_margin;
	}

	/**
	 * Get the [out_doc_top_margin] column value.
	 * 
	 * @return     int
	 */
	public function getOutDocTopMargin()
	{
		return $this->out_doc_top_margin;
	}

	/**
	 * Get the [out_doc_bottom_margin] column value.
	 * 
	 * @return     int
	 */
	public function getOutDocBottomMargin()
	{
		return $this->out_doc_bottom_margin;
	}

	/**
	 * Get the [out_doc_generate] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocGenerate()
	{
		return $this->out_doc_generate;
	}

	/**
	 * Get the [out_doc_type] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocType()
	{
		return $this->out_doc_type;
	}

	/**
	 * Get the [out_doc_current_revision] column value.
	 * 
	 * @return     int
	 */
	public function getOutDocCurrentRevision()
	{
		return $this->out_doc_current_revision;
	}

	/**
	 * Get the [out_doc_field_mapping] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocFieldMapping()
	{
		return $this->out_doc_field_mapping;
	}

	/**
	 * Get the [out_doc_versioning] column value.
	 * 
	 * @return     int
	 */
	public function getOutDocVersioning()
	{
		return $this->out_doc_versioning;
	}

	/**
	 * Get the [out_doc_destination_path] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocDestinationPath()
	{
		return $this->out_doc_destination_path;
	}

	/**
	 * Get the [out_doc_tags] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocTags()
	{
		return $this->out_doc_tags;
	}

	/**
	 * Get the [out_doc_pdf_security_enabled] column value.
	 * 
	 * @return     int
	 */
	public function getOutDocPdfSecurityEnabled()
	{
		return $this->out_doc_pdf_security_enabled;
	}

	/**
	 * Get the [out_doc_pdf_security_open_password] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocPdfSecurityOpenPassword()
	{
		return $this->out_doc_pdf_security_open_password;
	}

	/**
	 * Get the [out_doc_pdf_security_owner_password] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocPdfSecurityOwnerPassword()
	{
		return $this->out_doc_pdf_security_owner_password;
	}

	/**
	 * Get the [out_doc_pdf_security_permissions] column value.
	 * 
	 * @return     string
	 */
	public function getOutDocPdfSecurityPermissions()
	{
		return $this->out_doc_pdf_security_permissions;
	}

	/**
	 * Set the value of [out_doc_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_uid !== $v) {
			$this->out_doc_uid = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_UID;
		}

		return $this;
	} // setOutDocUid()

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [out_doc_report_generator] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocReportGenerator($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_report_generator !== $v) {
			$this->out_doc_report_generator = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_REPORT_GENERATOR;
		}

		return $this;
	} // setOutDocReportGenerator()

	/**
	 * Set the value of [out_doc_landscape] column.
	 * 
	 * @param      int $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocLandscape($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->out_doc_landscape !== $v) {
			$this->out_doc_landscape = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_LANDSCAPE;
		}

		return $this;
	} // setOutDocLandscape()

	/**
	 * Set the value of [out_doc_media] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocMedia($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_media !== $v) {
			$this->out_doc_media = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_MEDIA;
		}

		return $this;
	} // setOutDocMedia()

	/**
	 * Set the value of [out_doc_left_margin] column.
	 * 
	 * @param      int $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocLeftMargin($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->out_doc_left_margin !== $v) {
			$this->out_doc_left_margin = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_LEFT_MARGIN;
		}

		return $this;
	} // setOutDocLeftMargin()

	/**
	 * Set the value of [out_doc_right_margin] column.
	 * 
	 * @param      int $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocRightMargin($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->out_doc_right_margin !== $v) {
			$this->out_doc_right_margin = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_RIGHT_MARGIN;
		}

		return $this;
	} // setOutDocRightMargin()

	/**
	 * Set the value of [out_doc_top_margin] column.
	 * 
	 * @param      int $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocTopMargin($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->out_doc_top_margin !== $v) {
			$this->out_doc_top_margin = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_TOP_MARGIN;
		}

		return $this;
	} // setOutDocTopMargin()

	/**
	 * Set the value of [out_doc_bottom_margin] column.
	 * 
	 * @param      int $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocBottomMargin($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->out_doc_bottom_margin !== $v) {
			$this->out_doc_bottom_margin = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_BOTTOM_MARGIN;
		}

		return $this;
	} // setOutDocBottomMargin()

	/**
	 * Set the value of [out_doc_generate] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocGenerate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_generate !== $v) {
			$this->out_doc_generate = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_GENERATE;
		}

		return $this;
	} // setOutDocGenerate()

	/**
	 * Set the value of [out_doc_type] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_type !== $v) {
			$this->out_doc_type = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_TYPE;
		}

		return $this;
	} // setOutDocType()

	/**
	 * Set the value of [out_doc_current_revision] column.
	 * 
	 * @param      int $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocCurrentRevision($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->out_doc_current_revision !== $v) {
			$this->out_doc_current_revision = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_CURRENT_REVISION;
		}

		return $this;
	} // setOutDocCurrentRevision()

	/**
	 * Set the value of [out_doc_field_mapping] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocFieldMapping($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_field_mapping !== $v) {
			$this->out_doc_field_mapping = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_FIELD_MAPPING;
		}

		return $this;
	} // setOutDocFieldMapping()

	/**
	 * Set the value of [out_doc_versioning] column.
	 * 
	 * @param      int $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocVersioning($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->out_doc_versioning !== $v) {
			$this->out_doc_versioning = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_VERSIONING;
		}

		return $this;
	} // setOutDocVersioning()

	/**
	 * Set the value of [out_doc_destination_path] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocDestinationPath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_destination_path !== $v) {
			$this->out_doc_destination_path = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_DESTINATION_PATH;
		}

		return $this;
	} // setOutDocDestinationPath()

	/**
	 * Set the value of [out_doc_tags] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocTags($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_tags !== $v) {
			$this->out_doc_tags = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_TAGS;
		}

		return $this;
	} // setOutDocTags()

	/**
	 * Set the value of [out_doc_pdf_security_enabled] column.
	 * 
	 * @param      int $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocPdfSecurityEnabled($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->out_doc_pdf_security_enabled !== $v) {
			$this->out_doc_pdf_security_enabled = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_PDF_SECURITY_ENABLED;
		}

		return $this;
	} // setOutDocPdfSecurityEnabled()

	/**
	 * Set the value of [out_doc_pdf_security_open_password] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocPdfSecurityOpenPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_pdf_security_open_password !== $v) {
			$this->out_doc_pdf_security_open_password = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OPEN_PASSWORD;
		}

		return $this;
	} // setOutDocPdfSecurityOpenPassword()

	/**
	 * Set the value of [out_doc_pdf_security_owner_password] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocPdfSecurityOwnerPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_pdf_security_owner_password !== $v) {
			$this->out_doc_pdf_security_owner_password = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OWNER_PASSWORD;
		}

		return $this;
	} // setOutDocPdfSecurityOwnerPassword()

	/**
	 * Set the value of [out_doc_pdf_security_permissions] column.
	 * 
	 * @param      string $v new value
	 * @return     OutputDocument The current object (for fluent API support)
	 */
	public function setOutDocPdfSecurityPermissions($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->out_doc_pdf_security_permissions !== $v) {
			$this->out_doc_pdf_security_permissions = $v;
			$this->modifiedColumns[] = OutputDocumentPeer::OUT_DOC_PDF_SECURITY_PERMISSIONS;
		}

		return $this;
	} // setOutDocPdfSecurityPermissions()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->out_doc_uid !== '') {
				return false;
			}

			if ($this->pro_uid !== '') {
				return false;
			}

			if ($this->out_doc_report_generator !== 'HTML2PDF') {
				return false;
			}

			if ($this->out_doc_landscape !== 0) {
				return false;
			}

			if ($this->out_doc_media !== 'Letter') {
				return false;
			}

			if ($this->out_doc_left_margin !== 30) {
				return false;
			}

			if ($this->out_doc_right_margin !== 15) {
				return false;
			}

			if ($this->out_doc_top_margin !== 15) {
				return false;
			}

			if ($this->out_doc_bottom_margin !== 15) {
				return false;
			}

			if ($this->out_doc_generate !== 'BOTH') {
				return false;
			}

			if ($this->out_doc_type !== 'HTML') {
				return false;
			}

			if ($this->out_doc_current_revision !== 0) {
				return false;
			}

			if ($this->out_doc_versioning !== 0) {
				return false;
			}

			if ($this->out_doc_pdf_security_enabled !== 0) {
				return false;
			}

			if ($this->out_doc_pdf_security_open_password !== '') {
				return false;
			}

			if ($this->out_doc_pdf_security_owner_password !== '') {
				return false;
			}

			if ($this->out_doc_pdf_security_permissions !== '') {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->out_doc_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->pro_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->out_doc_report_generator = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->out_doc_landscape = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->out_doc_media = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->out_doc_left_margin = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->out_doc_right_margin = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->out_doc_top_margin = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->out_doc_bottom_margin = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->out_doc_generate = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->out_doc_type = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->out_doc_current_revision = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->out_doc_field_mapping = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->out_doc_versioning = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->out_doc_destination_path = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->out_doc_tags = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->out_doc_pdf_security_enabled = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->out_doc_pdf_security_open_password = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->out_doc_pdf_security_owner_password = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->out_doc_pdf_security_permissions = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 20; // 20 = OutputDocumentPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating OutputDocument object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = OutputDocumentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = OutputDocumentQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OutputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				OutputDocumentPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setNew(false);
				} else {
					$affectedRows = OutputDocumentPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = OutputDocumentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OutputDocumentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getOutDocUid();
				break;
			case 1:
				return $this->getProUid();
				break;
			case 2:
				return $this->getOutDocReportGenerator();
				break;
			case 3:
				return $this->getOutDocLandscape();
				break;
			case 4:
				return $this->getOutDocMedia();
				break;
			case 5:
				return $this->getOutDocLeftMargin();
				break;
			case 6:
				return $this->getOutDocRightMargin();
				break;
			case 7:
				return $this->getOutDocTopMargin();
				break;
			case 8:
				return $this->getOutDocBottomMargin();
				break;
			case 9:
				return $this->getOutDocGenerate();
				break;
			case 10:
				return $this->getOutDocType();
				break;
			case 11:
				return $this->getOutDocCurrentRevision();
				break;
			case 12:
				return $this->getOutDocFieldMapping();
				break;
			case 13:
				return $this->getOutDocVersioning();
				break;
			case 14:
				return $this->getOutDocDestinationPath();
				break;
			case 15:
				return $this->getOutDocTags();
				break;
			case 16:
				return $this->getOutDocPdfSecurityEnabled();
				break;
			case 17:
				return $this->getOutDocPdfSecurityOpenPassword();
				break;
			case 18:
				return $this->getOutDocPdfSecurityOwnerPassword();
				break;
			case 19:
				return $this->getOutDocPdfSecurityPermissions();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['OutputDocument'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['OutputDocument'][$this->getPrimaryKey()] = true;
		$keys = OutputDocumentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getOutDocUid(),
			$keys[1] => $this->getProUid(),
			$keys[2] => $this->getOutDocReportGenerator(),
			$keys[3] => $this->getOutDocLandscape(),
			$keys[4] => $this->getOutDocMedia(),
			$keys[5] => $this->getOutDocLeftMargin(),
			$keys[6] => $this->getOutDocRightMargin(),
			$keys[7] => $this->getOutDocTopMargin(),
			$keys[8] => $this->getOutDocBottomMargin(),
			$keys[9] => $this->getOutDocGenerate(),
			$keys[10] => $this->getOutDocType(),
			$keys[11] => $this->getOutDocCurrentRevision(),
			$keys[12] => $this->getOutDocFieldMapping(),
			$keys[13] => $this->getOutDocVersioning(),
			$keys[14] => $this->getOutDocDestinationPath(),
			$keys[15] => $this->getOutDocTags(),
			$keys[16] => $this->getOutDocPdfSecurityEnabled(),
			$keys[17] => $this->getOutDocPdfSecurityOpenPassword(),
			$keys[18] => $this->getOutDocPdfSecurityOwnerPassword(),
			$keys[19] => $this->getOutDocPdfSecurityPermissions(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OutputDocumentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setOutDocUid($value);
				break;
			case 1:
				$this->setProUid($value);
				break;
			case 2:
				$this->setOutDocReportGenerator($value);
				break;
			case 3:
				$this->setOutDocLandscape($value);
				break;
			case 4:
				$this->setOutDocMedia($value);
				break;
			case 5:
				$this->setOutDocLeftMargin($value);
				break;
			case 6:
				$this->setOutDocRightMargin($value);
				break;
			case 7:
				$this->setOutDocTopMargin($value);
				break;
			case 8:
				$this->setOutDocBottomMargin($value);
				break;
			case 9:
				$this->setOutDocGenerate($value);
				break;
			case 10:
				$this->setOutDocType($value);
				break;
			case 11:
				$this->setOutDocCurrentRevision($value);
				break;
			case 12:
				$this->setOutDocFieldMapping($value);
				break;
			case 13:
				$this->setOutDocVersioning($value);
				break;
			case 14:
				$this->setOutDocDestinationPath($value);
				break;
			case 15:
				$this->setOutDocTags($value);
				break;
			case 16:
				$this->setOutDocPdfSecurityEnabled($value);
				break;
			case 17:
				$this->setOutDocPdfSecurityOpenPassword($value);
				break;
			case 18:
				$this->setOutDocPdfSecurityOwnerPassword($value);
				break;
			case 19:
				$this->setOutDocPdfSecurityPermissions($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OutputDocumentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setOutDocUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setOutDocReportGenerator($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setOutDocLandscape($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setOutDocMedia($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setOutDocLeftMargin($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setOutDocRightMargin($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setOutDocTopMargin($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setOutDocBottomMargin($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setOutDocGenerate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setOutDocType($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setOutDocCurrentRevision($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setOutDocFieldMapping($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setOutDocVersioning($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setOutDocDestinationPath($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setOutDocTags($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setOutDocPdfSecurityEnabled($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setOutDocPdfSecurityOpenPassword($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setOutDocPdfSecurityOwnerPassword($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setOutDocPdfSecurityPermissions($arr[$keys[19]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(OutputDocumentPeer::DATABASE_NAME);

		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_UID)) $criteria->add(OutputDocumentPeer::OUT_DOC_UID, $this->out_doc_uid);
		if ($this->isColumnModified(OutputDocumentPeer::PRO_UID)) $criteria->add(OutputDocumentPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_REPORT_GENERATOR)) $criteria->add(OutputDocumentPeer::OUT_DOC_REPORT_GENERATOR, $this->out_doc_report_generator);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_LANDSCAPE)) $criteria->add(OutputDocumentPeer::OUT_DOC_LANDSCAPE, $this->out_doc_landscape);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_MEDIA)) $criteria->add(OutputDocumentPeer::OUT_DOC_MEDIA, $this->out_doc_media);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_LEFT_MARGIN)) $criteria->add(OutputDocumentPeer::OUT_DOC_LEFT_MARGIN, $this->out_doc_left_margin);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_RIGHT_MARGIN)) $criteria->add(OutputDocumentPeer::OUT_DOC_RIGHT_MARGIN, $this->out_doc_right_margin);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_TOP_MARGIN)) $criteria->add(OutputDocumentPeer::OUT_DOC_TOP_MARGIN, $this->out_doc_top_margin);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_BOTTOM_MARGIN)) $criteria->add(OutputDocumentPeer::OUT_DOC_BOTTOM_MARGIN, $this->out_doc_bottom_margin);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_GENERATE)) $criteria->add(OutputDocumentPeer::OUT_DOC_GENERATE, $this->out_doc_generate);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_TYPE)) $criteria->add(OutputDocumentPeer::OUT_DOC_TYPE, $this->out_doc_type);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_CURRENT_REVISION)) $criteria->add(OutputDocumentPeer::OUT_DOC_CURRENT_REVISION, $this->out_doc_current_revision);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_FIELD_MAPPING)) $criteria->add(OutputDocumentPeer::OUT_DOC_FIELD_MAPPING, $this->out_doc_field_mapping);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_VERSIONING)) $criteria->add(OutputDocumentPeer::OUT_DOC_VERSIONING, $this->out_doc_versioning);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_DESTINATION_PATH)) $criteria->add(OutputDocumentPeer::OUT_DOC_DESTINATION_PATH, $this->out_doc_destination_path);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_TAGS)) $criteria->add(OutputDocumentPeer::OUT_DOC_TAGS, $this->out_doc_tags);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_ENABLED)) $criteria->add(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_ENABLED, $this->out_doc_pdf_security_enabled);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OPEN_PASSWORD)) $criteria->add(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OPEN_PASSWORD, $this->out_doc_pdf_security_open_password);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OWNER_PASSWORD)) $criteria->add(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_OWNER_PASSWORD, $this->out_doc_pdf_security_owner_password);
		if ($this->isColumnModified(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_PERMISSIONS)) $criteria->add(OutputDocumentPeer::OUT_DOC_PDF_SECURITY_PERMISSIONS, $this->out_doc_pdf_security_permissions);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(OutputDocumentPeer::DATABASE_NAME);
		$criteria->add(OutputDocumentPeer::OUT_DOC_UID, $this->out_doc_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getOutDocUid();
	}

	/**
	 * Generic method to set the primary key (out_doc_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setOutDocUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getOutDocUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of OutputDocument (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setOutDocUid($this->getOutDocUid());
		$copyObj->setProUid($this->getProUid());
		$copyObj->setOutDocReportGenerator($this->getOutDocReportGenerator());
		$copyObj->setOutDocLandscape($this->getOutDocLandscape());
		$copyObj->setOutDocMedia($this->getOutDocMedia());
		$copyObj->setOutDocLeftMargin($this->getOutDocLeftMargin());
		$copyObj->setOutDocRightMargin($this->getOutDocRightMargin());
		$copyObj->setOutDocTopMargin($this->getOutDocTopMargin());
		$copyObj->setOutDocBottomMargin($this->getOutDocBottomMargin());
		$copyObj->setOutDocGenerate($this->getOutDocGenerate());
		$copyObj->setOutDocType($this->getOutDocType());
		$copyObj->setOutDocCurrentRevision($this->getOutDocCurrentRevision());
		$copyObj->setOutDocFieldMapping($this->getOutDocFieldMapping());
		$copyObj->setOutDocVersioning($this->getOutDocVersioning());
		$copyObj->setOutDocDestinationPath($this->getOutDocDestinationPath());
		$copyObj->setOutDocTags($this->getOutDocTags());
		$copyObj->setOutDocPdfSecurityEnabled($this->getOutDocPdfSecurityEnabled());
		$copyObj->setOutDocPdfSecurityOpenPassword($this->getOutDocPdfSecurityOpenPassword());
		$copyObj->setOutDocPdfSecurityOwnerPassword($this->getOutDocPdfSecurityOwnerPassword());
		$copyObj->setOutDocPdfSecurityPermissions($this->getOutDocPdfSecurityPermissions());
		if ($makeNew) {
			$copyObj->setNew(true);
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     OutputDocument Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     OutputDocumentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new OutputDocumentPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->out_doc_uid = null;
		$this->pro_uid = null;
		$this->out_doc_report_generator = null;
		$this->out_doc_landscape = null;
		$this->out_doc_media = null;
		$this->out_doc_left_margin = null;
		$this->out_doc_right_margin = null;
		$this->out_doc_top_margin = null;
		$this->out_doc_bottom_margin = null;
		$this->out_doc_generate = null;
		$this->out_doc_type = null;
		$this->out_doc_current_revision = null;
		$this->out_doc_field_mapping = null;
		$this->out_doc_versioning = null;
		$this->out_doc_destination_path = null;
		$this->out_doc_tags = null;
		$this->out_doc_pdf_security_enabled = null;
		$this->out_doc_pdf_security_open_password = null;
		$this->out_doc_pdf_security_owner_password = null;
		$this->out_doc_pdf_security_permissions = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(OutputDocumentPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseOutputDocument
