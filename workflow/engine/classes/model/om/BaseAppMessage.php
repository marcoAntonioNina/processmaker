<?php


require_once 'propel/om/BaseObject.php';
require_once 'propel/om/Persistent.php';

include_once 'propel/query/Criteria.php';
include_once 'classes/model/AppMessagePeer.php';

/**
 * Base class that represents a row from the 'APP_MESSAGE' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppMessage extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'AppMessagePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AppMessagePeer
	 */
	protected static $peer;

	/**
	 * The value for the app_msg_uid field.
	 * @var        string
	 */
	protected $app_msg_uid;

	/**
	 * The value for the msg_uid field.
	 * @var        string
	 */
	protected $msg_uid;

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
	 * The value for the app_msg_type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_msg_type;

	/**
	 * The value for the app_msg_subject field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_msg_subject;

	/**
	 * The value for the app_msg_from field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_msg_from;

	/**
	 * The value for the app_msg_to field.
	 * @var        string
	 */
	protected $app_msg_to;

	/**
	 * The value for the app_msg_body field.
	 * @var        string
	 */
	protected $app_msg_body;

	/**
	 * The value for the app_msg_date field.
	 * @var        string
	 */
	protected $app_msg_date;

	/**
	 * The value for the app_msg_cc field.
	 * @var        string
	 */
	protected $app_msg_cc;

	/**
	 * The value for the app_msg_bcc field.
	 * @var        string
	 */
	protected $app_msg_bcc;

	/**
	 * The value for the app_msg_template field.
	 * @var        string
	 */
	protected $app_msg_template;

	/**
	 * The value for the app_msg_status field.
	 * @var        string
	 */
	protected $app_msg_status;

	/**
	 * The value for the app_msg_attach field.
	 * @var        string
	 */
	protected $app_msg_attach;

	/**
	 * The value for the app_msg_send_date field.
	 * @var        string
	 */
	protected $app_msg_send_date;

	/**
	 * The value for the app_msg_show_message field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $app_msg_show_message;

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
		$this->app_uid = '';
		$this->del_index = 0;
		$this->app_msg_type = '';
		$this->app_msg_subject = '';
		$this->app_msg_from = '';
		$this->app_msg_show_message = 1;
	}

	/**
	 * Initializes internal state of BaseAppMessage object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [app_msg_uid] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgUid()
	{
		return $this->app_msg_uid;
	}

	/**
	 * Get the [msg_uid] column value.
	 * 
	 * @return     string
	 */
	public function getMsgUid()
	{
		return $this->msg_uid;
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
	 * Get the [app_msg_type] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgType()
	{
		return $this->app_msg_type;
	}

	/**
	 * Get the [app_msg_subject] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgSubject()
	{
		return $this->app_msg_subject;
	}

	/**
	 * Get the [app_msg_from] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgFrom()
	{
		return $this->app_msg_from;
	}

	/**
	 * Get the [app_msg_to] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgTo()
	{
		return $this->app_msg_to;
	}

	/**
	 * Get the [app_msg_body] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgBody()
	{
		return $this->app_msg_body;
	}

	/**
	 * Get the [optionally formatted] temporal [app_msg_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppMsgDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_msg_date === null) {
			return null;
		}


		if ($this->app_msg_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_msg_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_msg_date, true), $x);
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
	 * Get the [app_msg_cc] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgCc()
	{
		return $this->app_msg_cc;
	}

	/**
	 * Get the [app_msg_bcc] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgBcc()
	{
		return $this->app_msg_bcc;
	}

	/**
	 * Get the [app_msg_template] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgTemplate()
	{
		return $this->app_msg_template;
	}

	/**
	 * Get the [app_msg_status] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgStatus()
	{
		return $this->app_msg_status;
	}

	/**
	 * Get the [app_msg_attach] column value.
	 * 
	 * @return     string
	 */
	public function getAppMsgAttach()
	{
		return $this->app_msg_attach;
	}

	/**
	 * Get the [optionally formatted] temporal [app_msg_send_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppMsgSendDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_msg_send_date === null) {
			return null;
		}


		if ($this->app_msg_send_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_msg_send_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_msg_send_date, true), $x);
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
	 * Get the [app_msg_show_message] column value.
	 * 
	 * @return     int
	 */
	public function getAppMsgShowMessage()
	{
		return $this->app_msg_show_message;
	}

	/**
	 * Set the value of [app_msg_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_uid !== $v) {
			$this->app_msg_uid = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_UID;
		}

		return $this;
	} // setAppMsgUid()

	/**
	 * Set the value of [msg_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setMsgUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->msg_uid !== $v) {
			$this->msg_uid = $v;
			$this->modifiedColumns[] = AppMessagePeer::MSG_UID;
		}

		return $this;
	} // setMsgUid()

	/**
	 * Set the value of [app_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_uid !== $v) {
			$this->app_uid = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_UID;
		}

		return $this;
	} // setAppUid()

	/**
	 * Set the value of [del_index] column.
	 * 
	 * @param      int $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setDelIndex($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->del_index !== $v) {
			$this->del_index = $v;
			$this->modifiedColumns[] = AppMessagePeer::DEL_INDEX;
		}

		return $this;
	} // setDelIndex()

	/**
	 * Set the value of [app_msg_type] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_type !== $v) {
			$this->app_msg_type = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_TYPE;
		}

		return $this;
	} // setAppMsgType()

	/**
	 * Set the value of [app_msg_subject] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgSubject($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_subject !== $v) {
			$this->app_msg_subject = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_SUBJECT;
		}

		return $this;
	} // setAppMsgSubject()

	/**
	 * Set the value of [app_msg_from] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgFrom($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_from !== $v) {
			$this->app_msg_from = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_FROM;
		}

		return $this;
	} // setAppMsgFrom()

	/**
	 * Set the value of [app_msg_to] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgTo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_to !== $v) {
			$this->app_msg_to = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_TO;
		}

		return $this;
	} // setAppMsgTo()

	/**
	 * Set the value of [app_msg_body] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgBody($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_body !== $v) {
			$this->app_msg_body = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_BODY;
		}

		return $this;
	} // setAppMsgBody()

	/**
	 * Sets the value of [app_msg_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_msg_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_msg_date !== null && $tmpDt = new DateTime($this->app_msg_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_msg_date = $newDateAsString;
				$this->modifiedColumns[] = AppMessagePeer::APP_MSG_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppMsgDate()

	/**
	 * Set the value of [app_msg_cc] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgCc($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_cc !== $v) {
			$this->app_msg_cc = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_CC;
		}

		return $this;
	} // setAppMsgCc()

	/**
	 * Set the value of [app_msg_bcc] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgBcc($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_bcc !== $v) {
			$this->app_msg_bcc = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_BCC;
		}

		return $this;
	} // setAppMsgBcc()

	/**
	 * Set the value of [app_msg_template] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgTemplate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_template !== $v) {
			$this->app_msg_template = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_TEMPLATE;
		}

		return $this;
	} // setAppMsgTemplate()

	/**
	 * Set the value of [app_msg_status] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_status !== $v) {
			$this->app_msg_status = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_STATUS;
		}

		return $this;
	} // setAppMsgStatus()

	/**
	 * Set the value of [app_msg_attach] column.
	 * 
	 * @param      string $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgAttach($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_msg_attach !== $v) {
			$this->app_msg_attach = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_ATTACH;
		}

		return $this;
	} // setAppMsgAttach()

	/**
	 * Sets the value of [app_msg_send_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgSendDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_msg_send_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_msg_send_date !== null && $tmpDt = new DateTime($this->app_msg_send_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_msg_send_date = $newDateAsString;
				$this->modifiedColumns[] = AppMessagePeer::APP_MSG_SEND_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppMsgSendDate()

	/**
	 * Set the value of [app_msg_show_message] column.
	 * 
	 * @param      int $v new value
	 * @return     AppMessage The current object (for fluent API support)
	 */
	public function setAppMsgShowMessage($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->app_msg_show_message !== $v) {
			$this->app_msg_show_message = $v;
			$this->modifiedColumns[] = AppMessagePeer::APP_MSG_SHOW_MESSAGE;
		}

		return $this;
	} // setAppMsgShowMessage()

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
			if ($this->app_uid !== '') {
				return false;
			}

			if ($this->del_index !== 0) {
				return false;
			}

			if ($this->app_msg_type !== '') {
				return false;
			}

			if ($this->app_msg_subject !== '') {
				return false;
			}

			if ($this->app_msg_from !== '') {
				return false;
			}

			if ($this->app_msg_show_message !== 1) {
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

			$this->app_msg_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->msg_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->app_uid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->del_index = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->app_msg_type = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->app_msg_subject = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->app_msg_from = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->app_msg_to = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->app_msg_body = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->app_msg_date = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->app_msg_cc = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->app_msg_bcc = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->app_msg_template = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->app_msg_status = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->app_msg_attach = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->app_msg_send_date = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->app_msg_show_message = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 17; // 17 = AppMessagePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating AppMessage object", $e);
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
			$con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AppMessagePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = AppMessageQuery::create()
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
			$con = Propel::getConnection(AppMessagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				AppMessagePeer::addInstanceToPool($this);
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
					$affectedRows = AppMessagePeer::doUpdate($this, $con);
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


			if (($retval = AppMessagePeer::doValidate($this, $columns)) !== true) {
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
		$pos = AppMessagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAppMsgUid();
				break;
			case 1:
				return $this->getMsgUid();
				break;
			case 2:
				return $this->getAppUid();
				break;
			case 3:
				return $this->getDelIndex();
				break;
			case 4:
				return $this->getAppMsgType();
				break;
			case 5:
				return $this->getAppMsgSubject();
				break;
			case 6:
				return $this->getAppMsgFrom();
				break;
			case 7:
				return $this->getAppMsgTo();
				break;
			case 8:
				return $this->getAppMsgBody();
				break;
			case 9:
				return $this->getAppMsgDate();
				break;
			case 10:
				return $this->getAppMsgCc();
				break;
			case 11:
				return $this->getAppMsgBcc();
				break;
			case 12:
				return $this->getAppMsgTemplate();
				break;
			case 13:
				return $this->getAppMsgStatus();
				break;
			case 14:
				return $this->getAppMsgAttach();
				break;
			case 15:
				return $this->getAppMsgSendDate();
				break;
			case 16:
				return $this->getAppMsgShowMessage();
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
		if (isset($alreadyDumpedObjects['AppMessage'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['AppMessage'][$this->getPrimaryKey()] = true;
		$keys = AppMessagePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAppMsgUid(),
			$keys[1] => $this->getMsgUid(),
			$keys[2] => $this->getAppUid(),
			$keys[3] => $this->getDelIndex(),
			$keys[4] => $this->getAppMsgType(),
			$keys[5] => $this->getAppMsgSubject(),
			$keys[6] => $this->getAppMsgFrom(),
			$keys[7] => $this->getAppMsgTo(),
			$keys[8] => $this->getAppMsgBody(),
			$keys[9] => $this->getAppMsgDate(),
			$keys[10] => $this->getAppMsgCc(),
			$keys[11] => $this->getAppMsgBcc(),
			$keys[12] => $this->getAppMsgTemplate(),
			$keys[13] => $this->getAppMsgStatus(),
			$keys[14] => $this->getAppMsgAttach(),
			$keys[15] => $this->getAppMsgSendDate(),
			$keys[16] => $this->getAppMsgShowMessage(),
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
		$pos = AppMessagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAppMsgUid($value);
				break;
			case 1:
				$this->setMsgUid($value);
				break;
			case 2:
				$this->setAppUid($value);
				break;
			case 3:
				$this->setDelIndex($value);
				break;
			case 4:
				$this->setAppMsgType($value);
				break;
			case 5:
				$this->setAppMsgSubject($value);
				break;
			case 6:
				$this->setAppMsgFrom($value);
				break;
			case 7:
				$this->setAppMsgTo($value);
				break;
			case 8:
				$this->setAppMsgBody($value);
				break;
			case 9:
				$this->setAppMsgDate($value);
				break;
			case 10:
				$this->setAppMsgCc($value);
				break;
			case 11:
				$this->setAppMsgBcc($value);
				break;
			case 12:
				$this->setAppMsgTemplate($value);
				break;
			case 13:
				$this->setAppMsgStatus($value);
				break;
			case 14:
				$this->setAppMsgAttach($value);
				break;
			case 15:
				$this->setAppMsgSendDate($value);
				break;
			case 16:
				$this->setAppMsgShowMessage($value);
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
		$keys = AppMessagePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAppMsgUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMsgUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAppUid($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDelIndex($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAppMsgType($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAppMsgSubject($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAppMsgFrom($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAppMsgTo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAppMsgBody($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAppMsgDate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAppMsgCc($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAppMsgBcc($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAppMsgTemplate($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAppMsgStatus($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setAppMsgAttach($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setAppMsgSendDate($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setAppMsgShowMessage($arr[$keys[16]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AppMessagePeer::DATABASE_NAME);

		if ($this->isColumnModified(AppMessagePeer::APP_MSG_UID)) $criteria->add(AppMessagePeer::APP_MSG_UID, $this->app_msg_uid);
		if ($this->isColumnModified(AppMessagePeer::MSG_UID)) $criteria->add(AppMessagePeer::MSG_UID, $this->msg_uid);
		if ($this->isColumnModified(AppMessagePeer::APP_UID)) $criteria->add(AppMessagePeer::APP_UID, $this->app_uid);
		if ($this->isColumnModified(AppMessagePeer::DEL_INDEX)) $criteria->add(AppMessagePeer::DEL_INDEX, $this->del_index);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_TYPE)) $criteria->add(AppMessagePeer::APP_MSG_TYPE, $this->app_msg_type);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_SUBJECT)) $criteria->add(AppMessagePeer::APP_MSG_SUBJECT, $this->app_msg_subject);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_FROM)) $criteria->add(AppMessagePeer::APP_MSG_FROM, $this->app_msg_from);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_TO)) $criteria->add(AppMessagePeer::APP_MSG_TO, $this->app_msg_to);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_BODY)) $criteria->add(AppMessagePeer::APP_MSG_BODY, $this->app_msg_body);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_DATE)) $criteria->add(AppMessagePeer::APP_MSG_DATE, $this->app_msg_date);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_CC)) $criteria->add(AppMessagePeer::APP_MSG_CC, $this->app_msg_cc);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_BCC)) $criteria->add(AppMessagePeer::APP_MSG_BCC, $this->app_msg_bcc);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_TEMPLATE)) $criteria->add(AppMessagePeer::APP_MSG_TEMPLATE, $this->app_msg_template);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_STATUS)) $criteria->add(AppMessagePeer::APP_MSG_STATUS, $this->app_msg_status);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_ATTACH)) $criteria->add(AppMessagePeer::APP_MSG_ATTACH, $this->app_msg_attach);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_SEND_DATE)) $criteria->add(AppMessagePeer::APP_MSG_SEND_DATE, $this->app_msg_send_date);
		if ($this->isColumnModified(AppMessagePeer::APP_MSG_SHOW_MESSAGE)) $criteria->add(AppMessagePeer::APP_MSG_SHOW_MESSAGE, $this->app_msg_show_message);

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
		$criteria = new Criteria(AppMessagePeer::DATABASE_NAME);
		$criteria->add(AppMessagePeer::APP_MSG_UID, $this->app_msg_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getAppMsgUid();
	}

	/**
	 * Generic method to set the primary key (app_msg_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setAppMsgUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getAppMsgUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of AppMessage (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAppMsgUid($this->getAppMsgUid());
		$copyObj->setMsgUid($this->getMsgUid());
		$copyObj->setAppUid($this->getAppUid());
		$copyObj->setDelIndex($this->getDelIndex());
		$copyObj->setAppMsgType($this->getAppMsgType());
		$copyObj->setAppMsgSubject($this->getAppMsgSubject());
		$copyObj->setAppMsgFrom($this->getAppMsgFrom());
		$copyObj->setAppMsgTo($this->getAppMsgTo());
		$copyObj->setAppMsgBody($this->getAppMsgBody());
		$copyObj->setAppMsgDate($this->getAppMsgDate());
		$copyObj->setAppMsgCc($this->getAppMsgCc());
		$copyObj->setAppMsgBcc($this->getAppMsgBcc());
		$copyObj->setAppMsgTemplate($this->getAppMsgTemplate());
		$copyObj->setAppMsgStatus($this->getAppMsgStatus());
		$copyObj->setAppMsgAttach($this->getAppMsgAttach());
		$copyObj->setAppMsgSendDate($this->getAppMsgSendDate());
		$copyObj->setAppMsgShowMessage($this->getAppMsgShowMessage());
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
	 * @return     AppMessage Clone of current object.
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
	 * @return     AppMessagePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AppMessagePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->app_msg_uid = null;
		$this->msg_uid = null;
		$this->app_uid = null;
		$this->del_index = null;
		$this->app_msg_type = null;
		$this->app_msg_subject = null;
		$this->app_msg_from = null;
		$this->app_msg_to = null;
		$this->app_msg_body = null;
		$this->app_msg_date = null;
		$this->app_msg_cc = null;
		$this->app_msg_bcc = null;
		$this->app_msg_template = null;
		$this->app_msg_status = null;
		$this->app_msg_attach = null;
		$this->app_msg_send_date = null;
		$this->app_msg_show_message = null;
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
		return (string) $this->exportTo(AppMessagePeer::DEFAULT_STRING_FORMAT);
	}

} // BaseAppMessage
