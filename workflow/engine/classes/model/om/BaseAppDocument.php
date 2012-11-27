<?php


require_once 'propel/om/BaseObject.php';
require_once 'propel/om/Persistent.php';

include_once 'propel/query/Criteria.php';
include_once 'classes/model/AppDocumentPeer.php';

/**
 * Base class that represents a row from the 'APP_DOCUMENT' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppDocument extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'AppDocumentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AppDocumentPeer
	 */
	protected static $peer;

	/**
	 * The value for the app_doc_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_doc_uid;

	/**
	 * The value for the doc_version field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $doc_version;

	/**
	 * The value for the app_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_uid;

	/**
	 * The value for the del_index field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $del_index;

	/**
	 * The value for the doc_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $doc_uid;

	/**
	 * The value for the usr_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_uid;

	/**
	 * The value for the app_doc_type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_doc_type;

	/**
	 * The value for the app_doc_create_date field.
	 * @var        string
	 */
	protected $app_doc_create_date;

	/**
	 * The value for the app_doc_index field.
	 * @var        int
	 */
	protected $app_doc_index;

	/**
	 * The value for the folder_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $folder_uid;

	/**
	 * The value for the app_doc_plugin field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_doc_plugin;

	/**
	 * The value for the app_doc_tags field.
	 * @var        string
	 */
	protected $app_doc_tags;

	/**
	 * The value for the app_doc_status field.
	 * Note: this column has a database default value of: 'ACTIVE'
	 * @var        string
	 */
	protected $app_doc_status;

	/**
	 * The value for the app_doc_status_date field.
	 * @var        string
	 */
	protected $app_doc_status_date;

	/**
	 * The value for the app_doc_fieldname field.
	 * @var        string
	 */
	protected $app_doc_fieldname;

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
		$this->app_doc_uid = '';
		$this->doc_version = 1;
		$this->app_uid = '';
		$this->del_index = 0;
		$this->doc_uid = '';
		$this->usr_uid = '';
		$this->app_doc_type = '';
		$this->folder_uid = '';
		$this->app_doc_plugin = '';
		$this->app_doc_status = 'ACTIVE';
	}

	/**
	 * Initializes internal state of BaseAppDocument object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [app_doc_uid] column value.
	 * 
	 * @return     string
	 */
	public function getAppDocUid()
	{
		return $this->app_doc_uid;
	}

	/**
	 * Get the [doc_version] column value.
	 * 
	 * @return     int
	 */
	public function getDocVersion()
	{
		return $this->doc_version;
	}

	/**
	 * Get the [app_uid] column value.
	 * 
	 * @return     string
	 */
	public function getAppUid()
	{
		return $this->app_uid;
	}

	/**
	 * Get the [del_index] column value.
	 * 
	 * @return     int
	 */
	public function getDelIndex()
	{
		return $this->del_index;
	}

	/**
	 * Get the [doc_uid] column value.
	 * 
	 * @return     string
	 */
	public function getDocUid()
	{
		return $this->doc_uid;
	}

	/**
	 * Get the [usr_uid] column value.
	 * 
	 * @return     string
	 */
	public function getUsrUid()
	{
		return $this->usr_uid;
	}

	/**
	 * Get the [app_doc_type] column value.
	 * 
	 * @return     string
	 */
	public function getAppDocType()
	{
		return $this->app_doc_type;
	}

	/**
	 * Get the [optionally formatted] temporal [app_doc_create_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppDocCreateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_doc_create_date === null) {
			return null;
		}


		if ($this->app_doc_create_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_doc_create_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_doc_create_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [app_doc_index] column value.
	 * 
	 * @return     int
	 */
	public function getAppDocIndex()
	{
		return $this->app_doc_index;
	}

	/**
	 * Get the [folder_uid] column value.
	 * 
	 * @return     string
	 */
	public function getFolderUid()
	{
		return $this->folder_uid;
	}

	/**
	 * Get the [app_doc_plugin] column value.
	 * 
	 * @return     string
	 */
	public function getAppDocPlugin()
	{
		return $this->app_doc_plugin;
	}

	/**
	 * Get the [app_doc_tags] column value.
	 * 
	 * @return     string
	 */
	public function getAppDocTags()
	{
		return $this->app_doc_tags;
	}

	/**
	 * Get the [app_doc_status] column value.
	 * 
	 * @return     string
	 */
	public function getAppDocStatus()
	{
		return $this->app_doc_status;
	}

	/**
	 * Get the [optionally formatted] temporal [app_doc_status_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppDocStatusDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_doc_status_date === null) {
			return null;
		}


		if ($this->app_doc_status_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_doc_status_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_doc_status_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [app_doc_fieldname] column value.
	 * 
	 * @return     string
	 */
	public function getAppDocFieldname()
	{
		return $this->app_doc_fieldname;
	}

	/**
	 * Set the value of [app_doc_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppDocUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_doc_uid !== $v) {
			$this->app_doc_uid = $v;
			$this->modifiedColumns[] = AppDocumentPeer::APP_DOC_UID;
		}

		return $this;
	} // setAppDocUid()

	/**
	 * Set the value of [doc_version] column.
	 * 
	 * @param      int $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setDocVersion($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->doc_version !== $v) {
			$this->doc_version = $v;
			$this->modifiedColumns[] = AppDocumentPeer::DOC_VERSION;
		}

		return $this;
	} // setDocVersion()

	/**
	 * Set the value of [app_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_uid !== $v) {
			$this->app_uid = $v;
			$this->modifiedColumns[] = AppDocumentPeer::APP_UID;
		}

		return $this;
	} // setAppUid()

	/**
	 * Set the value of [del_index] column.
	 * 
	 * @param      int $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setDelIndex($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->del_index !== $v) {
			$this->del_index = $v;
			$this->modifiedColumns[] = AppDocumentPeer::DEL_INDEX;
		}

		return $this;
	} // setDelIndex()

	/**
	 * Set the value of [doc_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setDocUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->doc_uid !== $v) {
			$this->doc_uid = $v;
			$this->modifiedColumns[] = AppDocumentPeer::DOC_UID;
		}

		return $this;
	} // setDocUid()

	/**
	 * Set the value of [usr_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setUsrUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_uid !== $v) {
			$this->usr_uid = $v;
			$this->modifiedColumns[] = AppDocumentPeer::USR_UID;
		}

		return $this;
	} // setUsrUid()

	/**
	 * Set the value of [app_doc_type] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppDocType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_doc_type !== $v) {
			$this->app_doc_type = $v;
			$this->modifiedColumns[] = AppDocumentPeer::APP_DOC_TYPE;
		}

		return $this;
	} // setAppDocType()

	/**
	 * Sets the value of [app_doc_create_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppDocCreateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_doc_create_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_doc_create_date !== null && $tmpDt = new DateTime($this->app_doc_create_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_doc_create_date = $newDateAsString;
				$this->modifiedColumns[] = AppDocumentPeer::APP_DOC_CREATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppDocCreateDate()

	/**
	 * Set the value of [app_doc_index] column.
	 * 
	 * @param      int $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppDocIndex($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->app_doc_index !== $v) {
			$this->app_doc_index = $v;
			$this->modifiedColumns[] = AppDocumentPeer::APP_DOC_INDEX;
		}

		return $this;
	} // setAppDocIndex()

	/**
	 * Set the value of [folder_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setFolderUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->folder_uid !== $v) {
			$this->folder_uid = $v;
			$this->modifiedColumns[] = AppDocumentPeer::FOLDER_UID;
		}

		return $this;
	} // setFolderUid()

	/**
	 * Set the value of [app_doc_plugin] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppDocPlugin($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_doc_plugin !== $v) {
			$this->app_doc_plugin = $v;
			$this->modifiedColumns[] = AppDocumentPeer::APP_DOC_PLUGIN;
		}

		return $this;
	} // setAppDocPlugin()

	/**
	 * Set the value of [app_doc_tags] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppDocTags($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_doc_tags !== $v) {
			$this->app_doc_tags = $v;
			$this->modifiedColumns[] = AppDocumentPeer::APP_DOC_TAGS;
		}

		return $this;
	} // setAppDocTags()

	/**
	 * Set the value of [app_doc_status] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppDocStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_doc_status !== $v) {
			$this->app_doc_status = $v;
			$this->modifiedColumns[] = AppDocumentPeer::APP_DOC_STATUS;
		}

		return $this;
	} // setAppDocStatus()

	/**
	 * Sets the value of [app_doc_status_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppDocStatusDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_doc_status_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_doc_status_date !== null && $tmpDt = new DateTime($this->app_doc_status_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_doc_status_date = $newDateAsString;
				$this->modifiedColumns[] = AppDocumentPeer::APP_DOC_STATUS_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppDocStatusDate()

	/**
	 * Set the value of [app_doc_fieldname] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDocument The current object (for fluent API support)
	 */
	public function setAppDocFieldname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_doc_fieldname !== $v) {
			$this->app_doc_fieldname = $v;
			$this->modifiedColumns[] = AppDocumentPeer::APP_DOC_FIELDNAME;
		}

		return $this;
	} // setAppDocFieldname()

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
			if ($this->app_doc_uid !== '') {
				return false;
			}

			if ($this->doc_version !== 1) {
				return false;
			}

			if ($this->app_uid !== '') {
				return false;
			}

			if ($this->del_index !== 0) {
				return false;
			}

			if ($this->doc_uid !== '') {
				return false;
			}

			if ($this->usr_uid !== '') {
				return false;
			}

			if ($this->app_doc_type !== '') {
				return false;
			}

			if ($this->folder_uid !== '') {
				return false;
			}

			if ($this->app_doc_plugin !== '') {
				return false;
			}

			if ($this->app_doc_status !== 'ACTIVE') {
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

			$this->app_doc_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->doc_version = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->app_uid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->del_index = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->doc_uid = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->usr_uid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->app_doc_type = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->app_doc_create_date = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->app_doc_index = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->folder_uid = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->app_doc_plugin = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->app_doc_tags = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->app_doc_status = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->app_doc_status_date = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->app_doc_fieldname = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 15; // 15 = AppDocumentPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating AppDocument object", $e);
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
			$con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AppDocumentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = AppDocumentQuery::create()
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
			$con = Propel::getConnection(AppDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				AppDocumentPeer::addInstanceToPool($this);
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
					$affectedRows = AppDocumentPeer::doUpdate($this, $con);
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


			if (($retval = AppDocumentPeer::doValidate($this, $columns)) !== true) {
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
		$pos = AppDocumentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAppDocUid();
				break;
			case 1:
				return $this->getDocVersion();
				break;
			case 2:
				return $this->getAppUid();
				break;
			case 3:
				return $this->getDelIndex();
				break;
			case 4:
				return $this->getDocUid();
				break;
			case 5:
				return $this->getUsrUid();
				break;
			case 6:
				return $this->getAppDocType();
				break;
			case 7:
				return $this->getAppDocCreateDate();
				break;
			case 8:
				return $this->getAppDocIndex();
				break;
			case 9:
				return $this->getFolderUid();
				break;
			case 10:
				return $this->getAppDocPlugin();
				break;
			case 11:
				return $this->getAppDocTags();
				break;
			case 12:
				return $this->getAppDocStatus();
				break;
			case 13:
				return $this->getAppDocStatusDate();
				break;
			case 14:
				return $this->getAppDocFieldname();
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
		if (isset($alreadyDumpedObjects['AppDocument'][serialize($this->getPrimaryKey())])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['AppDocument'][serialize($this->getPrimaryKey())] = true;
		$keys = AppDocumentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAppDocUid(),
			$keys[1] => $this->getDocVersion(),
			$keys[2] => $this->getAppUid(),
			$keys[3] => $this->getDelIndex(),
			$keys[4] => $this->getDocUid(),
			$keys[5] => $this->getUsrUid(),
			$keys[6] => $this->getAppDocType(),
			$keys[7] => $this->getAppDocCreateDate(),
			$keys[8] => $this->getAppDocIndex(),
			$keys[9] => $this->getFolderUid(),
			$keys[10] => $this->getAppDocPlugin(),
			$keys[11] => $this->getAppDocTags(),
			$keys[12] => $this->getAppDocStatus(),
			$keys[13] => $this->getAppDocStatusDate(),
			$keys[14] => $this->getAppDocFieldname(),
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
		$pos = AppDocumentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAppDocUid($value);
				break;
			case 1:
				$this->setDocVersion($value);
				break;
			case 2:
				$this->setAppUid($value);
				break;
			case 3:
				$this->setDelIndex($value);
				break;
			case 4:
				$this->setDocUid($value);
				break;
			case 5:
				$this->setUsrUid($value);
				break;
			case 6:
				$this->setAppDocType($value);
				break;
			case 7:
				$this->setAppDocCreateDate($value);
				break;
			case 8:
				$this->setAppDocIndex($value);
				break;
			case 9:
				$this->setFolderUid($value);
				break;
			case 10:
				$this->setAppDocPlugin($value);
				break;
			case 11:
				$this->setAppDocTags($value);
				break;
			case 12:
				$this->setAppDocStatus($value);
				break;
			case 13:
				$this->setAppDocStatusDate($value);
				break;
			case 14:
				$this->setAppDocFieldname($value);
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
		$keys = AppDocumentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAppDocUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDocVersion($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAppUid($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDelIndex($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDocUid($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUsrUid($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAppDocType($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAppDocCreateDate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAppDocIndex($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFolderUid($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAppDocPlugin($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAppDocTags($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAppDocStatus($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAppDocStatusDate($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setAppDocFieldname($arr[$keys[14]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AppDocumentPeer::DATABASE_NAME);

		if ($this->isColumnModified(AppDocumentPeer::APP_DOC_UID)) $criteria->add(AppDocumentPeer::APP_DOC_UID, $this->app_doc_uid);
		if ($this->isColumnModified(AppDocumentPeer::DOC_VERSION)) $criteria->add(AppDocumentPeer::DOC_VERSION, $this->doc_version);
		if ($this->isColumnModified(AppDocumentPeer::APP_UID)) $criteria->add(AppDocumentPeer::APP_UID, $this->app_uid);
		if ($this->isColumnModified(AppDocumentPeer::DEL_INDEX)) $criteria->add(AppDocumentPeer::DEL_INDEX, $this->del_index);
		if ($this->isColumnModified(AppDocumentPeer::DOC_UID)) $criteria->add(AppDocumentPeer::DOC_UID, $this->doc_uid);
		if ($this->isColumnModified(AppDocumentPeer::USR_UID)) $criteria->add(AppDocumentPeer::USR_UID, $this->usr_uid);
		if ($this->isColumnModified(AppDocumentPeer::APP_DOC_TYPE)) $criteria->add(AppDocumentPeer::APP_DOC_TYPE, $this->app_doc_type);
		if ($this->isColumnModified(AppDocumentPeer::APP_DOC_CREATE_DATE)) $criteria->add(AppDocumentPeer::APP_DOC_CREATE_DATE, $this->app_doc_create_date);
		if ($this->isColumnModified(AppDocumentPeer::APP_DOC_INDEX)) $criteria->add(AppDocumentPeer::APP_DOC_INDEX, $this->app_doc_index);
		if ($this->isColumnModified(AppDocumentPeer::FOLDER_UID)) $criteria->add(AppDocumentPeer::FOLDER_UID, $this->folder_uid);
		if ($this->isColumnModified(AppDocumentPeer::APP_DOC_PLUGIN)) $criteria->add(AppDocumentPeer::APP_DOC_PLUGIN, $this->app_doc_plugin);
		if ($this->isColumnModified(AppDocumentPeer::APP_DOC_TAGS)) $criteria->add(AppDocumentPeer::APP_DOC_TAGS, $this->app_doc_tags);
		if ($this->isColumnModified(AppDocumentPeer::APP_DOC_STATUS)) $criteria->add(AppDocumentPeer::APP_DOC_STATUS, $this->app_doc_status);
		if ($this->isColumnModified(AppDocumentPeer::APP_DOC_STATUS_DATE)) $criteria->add(AppDocumentPeer::APP_DOC_STATUS_DATE, $this->app_doc_status_date);
		if ($this->isColumnModified(AppDocumentPeer::APP_DOC_FIELDNAME)) $criteria->add(AppDocumentPeer::APP_DOC_FIELDNAME, $this->app_doc_fieldname);

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
		$criteria = new Criteria(AppDocumentPeer::DATABASE_NAME);
		$criteria->add(AppDocumentPeer::APP_DOC_UID, $this->app_doc_uid);
		$criteria->add(AppDocumentPeer::DOC_VERSION, $this->doc_version);

		return $criteria;
	}

	/**
	 * Returns the composite primary key for this object.
	 * The array elements will be in same order as specified in XML.
	 * @return     array
	 */
	public function getPrimaryKey()
	{
		$pks = array();
		$pks[0] = $this->getAppDocUid();
		$pks[1] = $this->getDocVersion();

		return $pks;
	}

	/**
	 * Set the [composite] primary key.
	 *
	 * @param      array $keys The elements of the composite key (order must match the order in XML file).
	 * @return     void
	 */
	public function setPrimaryKey($keys)
	{
		$this->setAppDocUid($keys[0]);
		$this->setDocVersion($keys[1]);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return (null === $this->getAppDocUid()) && (null === $this->getDocVersion());
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of AppDocument (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAppDocUid($this->getAppDocUid());
		$copyObj->setDocVersion($this->getDocVersion());
		$copyObj->setAppUid($this->getAppUid());
		$copyObj->setDelIndex($this->getDelIndex());
		$copyObj->setDocUid($this->getDocUid());
		$copyObj->setUsrUid($this->getUsrUid());
		$copyObj->setAppDocType($this->getAppDocType());
		$copyObj->setAppDocCreateDate($this->getAppDocCreateDate());
		$copyObj->setAppDocIndex($this->getAppDocIndex());
		$copyObj->setFolderUid($this->getFolderUid());
		$copyObj->setAppDocPlugin($this->getAppDocPlugin());
		$copyObj->setAppDocTags($this->getAppDocTags());
		$copyObj->setAppDocStatus($this->getAppDocStatus());
		$copyObj->setAppDocStatusDate($this->getAppDocStatusDate());
		$copyObj->setAppDocFieldname($this->getAppDocFieldname());
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
	 * @return     AppDocument Clone of current object.
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
	 * @return     AppDocumentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AppDocumentPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->app_doc_uid = null;
		$this->doc_version = null;
		$this->app_uid = null;
		$this->del_index = null;
		$this->doc_uid = null;
		$this->usr_uid = null;
		$this->app_doc_type = null;
		$this->app_doc_create_date = null;
		$this->app_doc_index = null;
		$this->folder_uid = null;
		$this->app_doc_plugin = null;
		$this->app_doc_tags = null;
		$this->app_doc_status = null;
		$this->app_doc_status_date = null;
		$this->app_doc_fieldname = null;
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
		return (string) $this->exportTo(AppDocumentPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseAppDocument
