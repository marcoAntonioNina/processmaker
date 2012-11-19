<?php


/**
 * Base class that represents a row from the 'APP_DELAY' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppDelay extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'AppDelayPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AppDelayPeer
	 */
	protected static $peer;

	/**
	 * The value for the app_delay_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_delay_uid;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the app_uid field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $app_uid;

	/**
	 * The value for the app_thread_index field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $app_thread_index;

	/**
	 * The value for the app_del_index field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $app_del_index;

	/**
	 * The value for the app_type field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $app_type;

	/**
	 * The value for the app_status field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $app_status;

	/**
	 * The value for the app_next_task field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $app_next_task;

	/**
	 * The value for the app_delegation_user field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $app_delegation_user;

	/**
	 * The value for the app_enable_action_user field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $app_enable_action_user;

	/**
	 * The value for the app_enable_action_date field.
	 * @var        string
	 */
	protected $app_enable_action_date;

	/**
	 * The value for the app_disable_action_user field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $app_disable_action_user;

	/**
	 * The value for the app_disable_action_date field.
	 * @var        string
	 */
	protected $app_disable_action_date;

	/**
	 * The value for the app_automatic_disabled_date field.
	 * @var        string
	 */
	protected $app_automatic_disabled_date;

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
		$this->app_delay_uid = '';
		$this->pro_uid = '0';
		$this->app_uid = '0';
		$this->app_thread_index = 0;
		$this->app_del_index = 0;
		$this->app_type = '0';
		$this->app_status = '0';
		$this->app_next_task = '0';
		$this->app_delegation_user = '0';
		$this->app_enable_action_user = '0';
		$this->app_disable_action_user = '0';
	}

	/**
	 * Initializes internal state of BaseAppDelay object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [app_delay_uid] column value.
	 * 
	 * @return     string
	 */
	public function getAppDelayUid()
	{
		return $this->app_delay_uid;
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
	 * Get the [app_uid] column value.
	 * 
	 * @return     string
	 */
	public function getAppUid()
	{
		return $this->app_uid;
	}

	/**
	 * Get the [app_thread_index] column value.
	 * 
	 * @return     int
	 */
	public function getAppThreadIndex()
	{
		return $this->app_thread_index;
	}

	/**
	 * Get the [app_del_index] column value.
	 * 
	 * @return     int
	 */
	public function getAppDelIndex()
	{
		return $this->app_del_index;
	}

	/**
	 * Get the [app_type] column value.
	 * 
	 * @return     string
	 */
	public function getAppType()
	{
		return $this->app_type;
	}

	/**
	 * Get the [app_status] column value.
	 * 
	 * @return     string
	 */
	public function getAppStatus()
	{
		return $this->app_status;
	}

	/**
	 * Get the [app_next_task] column value.
	 * 
	 * @return     string
	 */
	public function getAppNextTask()
	{
		return $this->app_next_task;
	}

	/**
	 * Get the [app_delegation_user] column value.
	 * 
	 * @return     string
	 */
	public function getAppDelegationUser()
	{
		return $this->app_delegation_user;
	}

	/**
	 * Get the [app_enable_action_user] column value.
	 * 
	 * @return     string
	 */
	public function getAppEnableActionUser()
	{
		return $this->app_enable_action_user;
	}

	/**
	 * Get the [optionally formatted] temporal [app_enable_action_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppEnableActionDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_enable_action_date === null) {
			return null;
		}


		if ($this->app_enable_action_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_enable_action_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_enable_action_date, true), $x);
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
	 * Get the [app_disable_action_user] column value.
	 * 
	 * @return     string
	 */
	public function getAppDisableActionUser()
	{
		return $this->app_disable_action_user;
	}

	/**
	 * Get the [optionally formatted] temporal [app_disable_action_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppDisableActionDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_disable_action_date === null) {
			return null;
		}


		if ($this->app_disable_action_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_disable_action_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_disable_action_date, true), $x);
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
	 * Get the [optionally formatted] temporal [app_automatic_disabled_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppAutomaticDisabledDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_automatic_disabled_date === null) {
			return null;
		}


		if ($this->app_automatic_disabled_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_automatic_disabled_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_automatic_disabled_date, true), $x);
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
	 * Set the value of [app_delay_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppDelayUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_delay_uid !== $v) {
			$this->app_delay_uid = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_DELAY_UID;
		}

		return $this;
	} // setAppDelayUid()

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = AppDelayPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [app_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_uid !== $v) {
			$this->app_uid = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_UID;
		}

		return $this;
	} // setAppUid()

	/**
	 * Set the value of [app_thread_index] column.
	 * 
	 * @param      int $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppThreadIndex($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->app_thread_index !== $v) {
			$this->app_thread_index = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_THREAD_INDEX;
		}

		return $this;
	} // setAppThreadIndex()

	/**
	 * Set the value of [app_del_index] column.
	 * 
	 * @param      int $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppDelIndex($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->app_del_index !== $v) {
			$this->app_del_index = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_DEL_INDEX;
		}

		return $this;
	} // setAppDelIndex()

	/**
	 * Set the value of [app_type] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_type !== $v) {
			$this->app_type = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_TYPE;
		}

		return $this;
	} // setAppType()

	/**
	 * Set the value of [app_status] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_status !== $v) {
			$this->app_status = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_STATUS;
		}

		return $this;
	} // setAppStatus()

	/**
	 * Set the value of [app_next_task] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppNextTask($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_next_task !== $v) {
			$this->app_next_task = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_NEXT_TASK;
		}

		return $this;
	} // setAppNextTask()

	/**
	 * Set the value of [app_delegation_user] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppDelegationUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_delegation_user !== $v) {
			$this->app_delegation_user = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_DELEGATION_USER;
		}

		return $this;
	} // setAppDelegationUser()

	/**
	 * Set the value of [app_enable_action_user] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppEnableActionUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_enable_action_user !== $v) {
			$this->app_enable_action_user = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_ENABLE_ACTION_USER;
		}

		return $this;
	} // setAppEnableActionUser()

	/**
	 * Sets the value of [app_enable_action_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppEnableActionDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_enable_action_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_enable_action_date !== null && $tmpDt = new DateTime($this->app_enable_action_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_enable_action_date = $newDateAsString;
				$this->modifiedColumns[] = AppDelayPeer::APP_ENABLE_ACTION_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppEnableActionDate()

	/**
	 * Set the value of [app_disable_action_user] column.
	 * 
	 * @param      string $v new value
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppDisableActionUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_disable_action_user !== $v) {
			$this->app_disable_action_user = $v;
			$this->modifiedColumns[] = AppDelayPeer::APP_DISABLE_ACTION_USER;
		}

		return $this;
	} // setAppDisableActionUser()

	/**
	 * Sets the value of [app_disable_action_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppDisableActionDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_disable_action_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_disable_action_date !== null && $tmpDt = new DateTime($this->app_disable_action_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_disable_action_date = $newDateAsString;
				$this->modifiedColumns[] = AppDelayPeer::APP_DISABLE_ACTION_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppDisableActionDate()

	/**
	 * Sets the value of [app_automatic_disabled_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppDelay The current object (for fluent API support)
	 */
	public function setAppAutomaticDisabledDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_automatic_disabled_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_automatic_disabled_date !== null && $tmpDt = new DateTime($this->app_automatic_disabled_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_automatic_disabled_date = $newDateAsString;
				$this->modifiedColumns[] = AppDelayPeer::APP_AUTOMATIC_DISABLED_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppAutomaticDisabledDate()

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
			if ($this->app_delay_uid !== '') {
				return false;
			}

			if ($this->pro_uid !== '0') {
				return false;
			}

			if ($this->app_uid !== '0') {
				return false;
			}

			if ($this->app_thread_index !== 0) {
				return false;
			}

			if ($this->app_del_index !== 0) {
				return false;
			}

			if ($this->app_type !== '0') {
				return false;
			}

			if ($this->app_status !== '0') {
				return false;
			}

			if ($this->app_next_task !== '0') {
				return false;
			}

			if ($this->app_delegation_user !== '0') {
				return false;
			}

			if ($this->app_enable_action_user !== '0') {
				return false;
			}

			if ($this->app_disable_action_user !== '0') {
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

			$this->app_delay_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->pro_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->app_uid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->app_thread_index = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->app_del_index = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->app_type = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->app_status = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->app_next_task = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->app_delegation_user = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->app_enable_action_user = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->app_enable_action_date = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->app_disable_action_user = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->app_disable_action_date = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->app_automatic_disabled_date = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = AppDelayPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating AppDelay object", $e);
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
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AppDelayPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = AppDelayQuery::create()
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
			$con = Propel::getConnection(AppDelayPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				AppDelayPeer::addInstanceToPool($this);
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
					$affectedRows = AppDelayPeer::doUpdate($this, $con);
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


			if (($retval = AppDelayPeer::doValidate($this, $columns)) !== true) {
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
		$pos = AppDelayPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAppDelayUid();
				break;
			case 1:
				return $this->getProUid();
				break;
			case 2:
				return $this->getAppUid();
				break;
			case 3:
				return $this->getAppThreadIndex();
				break;
			case 4:
				return $this->getAppDelIndex();
				break;
			case 5:
				return $this->getAppType();
				break;
			case 6:
				return $this->getAppStatus();
				break;
			case 7:
				return $this->getAppNextTask();
				break;
			case 8:
				return $this->getAppDelegationUser();
				break;
			case 9:
				return $this->getAppEnableActionUser();
				break;
			case 10:
				return $this->getAppEnableActionDate();
				break;
			case 11:
				return $this->getAppDisableActionUser();
				break;
			case 12:
				return $this->getAppDisableActionDate();
				break;
			case 13:
				return $this->getAppAutomaticDisabledDate();
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
		if (isset($alreadyDumpedObjects['AppDelay'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['AppDelay'][$this->getPrimaryKey()] = true;
		$keys = AppDelayPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAppDelayUid(),
			$keys[1] => $this->getProUid(),
			$keys[2] => $this->getAppUid(),
			$keys[3] => $this->getAppThreadIndex(),
			$keys[4] => $this->getAppDelIndex(),
			$keys[5] => $this->getAppType(),
			$keys[6] => $this->getAppStatus(),
			$keys[7] => $this->getAppNextTask(),
			$keys[8] => $this->getAppDelegationUser(),
			$keys[9] => $this->getAppEnableActionUser(),
			$keys[10] => $this->getAppEnableActionDate(),
			$keys[11] => $this->getAppDisableActionUser(),
			$keys[12] => $this->getAppDisableActionDate(),
			$keys[13] => $this->getAppAutomaticDisabledDate(),
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
		$pos = AppDelayPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAppDelayUid($value);
				break;
			case 1:
				$this->setProUid($value);
				break;
			case 2:
				$this->setAppUid($value);
				break;
			case 3:
				$this->setAppThreadIndex($value);
				break;
			case 4:
				$this->setAppDelIndex($value);
				break;
			case 5:
				$this->setAppType($value);
				break;
			case 6:
				$this->setAppStatus($value);
				break;
			case 7:
				$this->setAppNextTask($value);
				break;
			case 8:
				$this->setAppDelegationUser($value);
				break;
			case 9:
				$this->setAppEnableActionUser($value);
				break;
			case 10:
				$this->setAppEnableActionDate($value);
				break;
			case 11:
				$this->setAppDisableActionUser($value);
				break;
			case 12:
				$this->setAppDisableActionDate($value);
				break;
			case 13:
				$this->setAppAutomaticDisabledDate($value);
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
		$keys = AppDelayPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAppDelayUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAppUid($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAppThreadIndex($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAppDelIndex($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAppType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAppStatus($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAppNextTask($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAppDelegationUser($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAppEnableActionUser($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAppEnableActionDate($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAppDisableActionUser($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAppDisableActionDate($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAppAutomaticDisabledDate($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AppDelayPeer::DATABASE_NAME);

		if ($this->isColumnModified(AppDelayPeer::APP_DELAY_UID)) $criteria->add(AppDelayPeer::APP_DELAY_UID, $this->app_delay_uid);
		if ($this->isColumnModified(AppDelayPeer::PRO_UID)) $criteria->add(AppDelayPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(AppDelayPeer::APP_UID)) $criteria->add(AppDelayPeer::APP_UID, $this->app_uid);
		if ($this->isColumnModified(AppDelayPeer::APP_THREAD_INDEX)) $criteria->add(AppDelayPeer::APP_THREAD_INDEX, $this->app_thread_index);
		if ($this->isColumnModified(AppDelayPeer::APP_DEL_INDEX)) $criteria->add(AppDelayPeer::APP_DEL_INDEX, $this->app_del_index);
		if ($this->isColumnModified(AppDelayPeer::APP_TYPE)) $criteria->add(AppDelayPeer::APP_TYPE, $this->app_type);
		if ($this->isColumnModified(AppDelayPeer::APP_STATUS)) $criteria->add(AppDelayPeer::APP_STATUS, $this->app_status);
		if ($this->isColumnModified(AppDelayPeer::APP_NEXT_TASK)) $criteria->add(AppDelayPeer::APP_NEXT_TASK, $this->app_next_task);
		if ($this->isColumnModified(AppDelayPeer::APP_DELEGATION_USER)) $criteria->add(AppDelayPeer::APP_DELEGATION_USER, $this->app_delegation_user);
		if ($this->isColumnModified(AppDelayPeer::APP_ENABLE_ACTION_USER)) $criteria->add(AppDelayPeer::APP_ENABLE_ACTION_USER, $this->app_enable_action_user);
		if ($this->isColumnModified(AppDelayPeer::APP_ENABLE_ACTION_DATE)) $criteria->add(AppDelayPeer::APP_ENABLE_ACTION_DATE, $this->app_enable_action_date);
		if ($this->isColumnModified(AppDelayPeer::APP_DISABLE_ACTION_USER)) $criteria->add(AppDelayPeer::APP_DISABLE_ACTION_USER, $this->app_disable_action_user);
		if ($this->isColumnModified(AppDelayPeer::APP_DISABLE_ACTION_DATE)) $criteria->add(AppDelayPeer::APP_DISABLE_ACTION_DATE, $this->app_disable_action_date);
		if ($this->isColumnModified(AppDelayPeer::APP_AUTOMATIC_DISABLED_DATE)) $criteria->add(AppDelayPeer::APP_AUTOMATIC_DISABLED_DATE, $this->app_automatic_disabled_date);

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
		$criteria = new Criteria(AppDelayPeer::DATABASE_NAME);
		$criteria->add(AppDelayPeer::APP_DELAY_UID, $this->app_delay_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getAppDelayUid();
	}

	/**
	 * Generic method to set the primary key (app_delay_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setAppDelayUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getAppDelayUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of AppDelay (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAppDelayUid($this->getAppDelayUid());
		$copyObj->setProUid($this->getProUid());
		$copyObj->setAppUid($this->getAppUid());
		$copyObj->setAppThreadIndex($this->getAppThreadIndex());
		$copyObj->setAppDelIndex($this->getAppDelIndex());
		$copyObj->setAppType($this->getAppType());
		$copyObj->setAppStatus($this->getAppStatus());
		$copyObj->setAppNextTask($this->getAppNextTask());
		$copyObj->setAppDelegationUser($this->getAppDelegationUser());
		$copyObj->setAppEnableActionUser($this->getAppEnableActionUser());
		$copyObj->setAppEnableActionDate($this->getAppEnableActionDate());
		$copyObj->setAppDisableActionUser($this->getAppDisableActionUser());
		$copyObj->setAppDisableActionDate($this->getAppDisableActionDate());
		$copyObj->setAppAutomaticDisabledDate($this->getAppAutomaticDisabledDate());
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
	 * @return     AppDelay Clone of current object.
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
	 * @return     AppDelayPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AppDelayPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->app_delay_uid = null;
		$this->pro_uid = null;
		$this->app_uid = null;
		$this->app_thread_index = null;
		$this->app_del_index = null;
		$this->app_type = null;
		$this->app_status = null;
		$this->app_next_task = null;
		$this->app_delegation_user = null;
		$this->app_enable_action_user = null;
		$this->app_enable_action_date = null;
		$this->app_disable_action_user = null;
		$this->app_disable_action_date = null;
		$this->app_automatic_disabled_date = null;
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
		return (string) $this->exportTo(AppDelayPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseAppDelay
