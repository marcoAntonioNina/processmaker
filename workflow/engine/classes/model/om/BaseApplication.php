<?php


/**
 * Base class that represents a row from the 'APPLICATION' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseApplication extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ApplicationPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ApplicationPeer
	 */
	protected static $peer;

	/**
	 * The value for the app_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_uid;

	/**
	 * The value for the app_number field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $app_number;

	/**
	 * The value for the app_parent field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $app_parent;

	/**
	 * The value for the app_status field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_status;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the app_proc_status field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_proc_status;

	/**
	 * The value for the app_proc_code field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_proc_code;

	/**
	 * The value for the app_parallel field.
	 * Note: this column has a database default value of: 'NO'
	 * @var        string
	 */
	protected $app_parallel;

	/**
	 * The value for the app_init_user field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_init_user;

	/**
	 * The value for the app_cur_user field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_cur_user;

	/**
	 * The value for the app_create_date field.
	 * @var        string
	 */
	protected $app_create_date;

	/**
	 * The value for the app_init_date field.
	 * @var        string
	 */
	protected $app_init_date;

	/**
	 * The value for the app_finish_date field.
	 * @var        string
	 */
	protected $app_finish_date;

	/**
	 * The value for the app_update_date field.
	 * @var        string
	 */
	protected $app_update_date;

	/**
	 * The value for the app_data field.
	 * @var        string
	 */
	protected $app_data;

	/**
	 * The value for the app_pin field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_pin;

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
		$this->app_number = 0;
		$this->app_parent = '0';
		$this->app_status = '';
		$this->pro_uid = '';
		$this->app_proc_status = '';
		$this->app_proc_code = '';
		$this->app_parallel = 'NO';
		$this->app_init_user = '';
		$this->app_cur_user = '';
		$this->app_pin = '';
	}

	/**
	 * Initializes internal state of BaseApplication object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [app_number] column value.
	 * 
	 * @return     int
	 */
	public function getAppNumber()
	{
		return $this->app_number;
	}

	/**
	 * Get the [app_parent] column value.
	 * 
	 * @return     string
	 */
	public function getAppParent()
	{
		return $this->app_parent;
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
	 * Get the [pro_uid] column value.
	 * 
	 * @return     string
	 */
	public function getProUid()
	{
		return $this->pro_uid;
	}

	/**
	 * Get the [app_proc_status] column value.
	 * 
	 * @return     string
	 */
	public function getAppProcStatus()
	{
		return $this->app_proc_status;
	}

	/**
	 * Get the [app_proc_code] column value.
	 * 
	 * @return     string
	 */
	public function getAppProcCode()
	{
		return $this->app_proc_code;
	}

	/**
	 * Get the [app_parallel] column value.
	 * 
	 * @return     string
	 */
	public function getAppParallel()
	{
		return $this->app_parallel;
	}

	/**
	 * Get the [app_init_user] column value.
	 * 
	 * @return     string
	 */
	public function getAppInitUser()
	{
		return $this->app_init_user;
	}

	/**
	 * Get the [app_cur_user] column value.
	 * 
	 * @return     string
	 */
	public function getAppCurUser()
	{
		return $this->app_cur_user;
	}

	/**
	 * Get the [optionally formatted] temporal [app_create_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppCreateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_create_date === null) {
			return null;
		}


		if ($this->app_create_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_create_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_create_date, true), $x);
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
	 * Get the [optionally formatted] temporal [app_init_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppInitDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_init_date === null) {
			return null;
		}


		if ($this->app_init_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_init_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_init_date, true), $x);
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
	 * Get the [optionally formatted] temporal [app_finish_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppFinishDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_finish_date === null) {
			return null;
		}


		if ($this->app_finish_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_finish_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_finish_date, true), $x);
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
	 * Get the [optionally formatted] temporal [app_update_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getAppUpdateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->app_update_date === null) {
			return null;
		}


		if ($this->app_update_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->app_update_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->app_update_date, true), $x);
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
	 * Get the [app_data] column value.
	 * 
	 * @return     string
	 */
	public function getAppData()
	{
		return $this->app_data;
	}

	/**
	 * Get the [app_pin] column value.
	 * 
	 * @return     string
	 */
	public function getAppPin()
	{
		return $this->app_pin;
	}

	/**
	 * Set the value of [app_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_uid !== $v) {
			$this->app_uid = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_UID;
		}

		return $this;
	} // setAppUid()

	/**
	 * Set the value of [app_number] column.
	 * 
	 * @param      int $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppNumber($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->app_number !== $v) {
			$this->app_number = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_NUMBER;
		}

		return $this;
	} // setAppNumber()

	/**
	 * Set the value of [app_parent] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppParent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_parent !== $v) {
			$this->app_parent = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_PARENT;
		}

		return $this;
	} // setAppParent()

	/**
	 * Set the value of [app_status] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_status !== $v) {
			$this->app_status = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_STATUS;
		}

		return $this;
	} // setAppStatus()

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = ApplicationPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [app_proc_status] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppProcStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_proc_status !== $v) {
			$this->app_proc_status = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_PROC_STATUS;
		}

		return $this;
	} // setAppProcStatus()

	/**
	 * Set the value of [app_proc_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppProcCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_proc_code !== $v) {
			$this->app_proc_code = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_PROC_CODE;
		}

		return $this;
	} // setAppProcCode()

	/**
	 * Set the value of [app_parallel] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppParallel($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_parallel !== $v) {
			$this->app_parallel = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_PARALLEL;
		}

		return $this;
	} // setAppParallel()

	/**
	 * Set the value of [app_init_user] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppInitUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_init_user !== $v) {
			$this->app_init_user = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_INIT_USER;
		}

		return $this;
	} // setAppInitUser()

	/**
	 * Set the value of [app_cur_user] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppCurUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_cur_user !== $v) {
			$this->app_cur_user = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_CUR_USER;
		}

		return $this;
	} // setAppCurUser()

	/**
	 * Sets the value of [app_create_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppCreateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_create_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_create_date !== null && $tmpDt = new DateTime($this->app_create_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_create_date = $newDateAsString;
				$this->modifiedColumns[] = ApplicationPeer::APP_CREATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppCreateDate()

	/**
	 * Sets the value of [app_init_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppInitDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_init_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_init_date !== null && $tmpDt = new DateTime($this->app_init_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_init_date = $newDateAsString;
				$this->modifiedColumns[] = ApplicationPeer::APP_INIT_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppInitDate()

	/**
	 * Sets the value of [app_finish_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppFinishDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_finish_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_finish_date !== null && $tmpDt = new DateTime($this->app_finish_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_finish_date = $newDateAsString;
				$this->modifiedColumns[] = ApplicationPeer::APP_FINISH_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppFinishDate()

	/**
	 * Sets the value of [app_update_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppUpdateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_update_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_update_date !== null && $tmpDt = new DateTime($this->app_update_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_update_date = $newDateAsString;
				$this->modifiedColumns[] = ApplicationPeer::APP_UPDATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppUpdateDate()

	/**
	 * Set the value of [app_data] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppData($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_data !== $v) {
			$this->app_data = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_DATA;
		}

		return $this;
	} // setAppData()

	/**
	 * Set the value of [app_pin] column.
	 * 
	 * @param      string $v new value
	 * @return     Application The current object (for fluent API support)
	 */
	public function setAppPin($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_pin !== $v) {
			$this->app_pin = $v;
			$this->modifiedColumns[] = ApplicationPeer::APP_PIN;
		}

		return $this;
	} // setAppPin()

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

			if ($this->app_number !== 0) {
				return false;
			}

			if ($this->app_parent !== '0') {
				return false;
			}

			if ($this->app_status !== '') {
				return false;
			}

			if ($this->pro_uid !== '') {
				return false;
			}

			if ($this->app_proc_status !== '') {
				return false;
			}

			if ($this->app_proc_code !== '') {
				return false;
			}

			if ($this->app_parallel !== 'NO') {
				return false;
			}

			if ($this->app_init_user !== '') {
				return false;
			}

			if ($this->app_cur_user !== '') {
				return false;
			}

			if ($this->app_pin !== '') {
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

			$this->app_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->app_number = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->app_parent = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->app_status = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->pro_uid = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->app_proc_status = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->app_proc_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->app_parallel = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->app_init_user = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->app_cur_user = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->app_create_date = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->app_init_date = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->app_finish_date = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->app_update_date = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->app_data = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->app_pin = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 16; // 16 = ApplicationPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Application object", $e);
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
			$con = Propel::getConnection(ApplicationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ApplicationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ApplicationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = ApplicationQuery::create()
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
			$con = Propel::getConnection(ApplicationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ApplicationPeer::addInstanceToPool($this);
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
					$affectedRows = ApplicationPeer::doUpdate($this, $con);
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


			if (($retval = ApplicationPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ApplicationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAppUid();
				break;
			case 1:
				return $this->getAppNumber();
				break;
			case 2:
				return $this->getAppParent();
				break;
			case 3:
				return $this->getAppStatus();
				break;
			case 4:
				return $this->getProUid();
				break;
			case 5:
				return $this->getAppProcStatus();
				break;
			case 6:
				return $this->getAppProcCode();
				break;
			case 7:
				return $this->getAppParallel();
				break;
			case 8:
				return $this->getAppInitUser();
				break;
			case 9:
				return $this->getAppCurUser();
				break;
			case 10:
				return $this->getAppCreateDate();
				break;
			case 11:
				return $this->getAppInitDate();
				break;
			case 12:
				return $this->getAppFinishDate();
				break;
			case 13:
				return $this->getAppUpdateDate();
				break;
			case 14:
				return $this->getAppData();
				break;
			case 15:
				return $this->getAppPin();
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
		if (isset($alreadyDumpedObjects['Application'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Application'][$this->getPrimaryKey()] = true;
		$keys = ApplicationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAppUid(),
			$keys[1] => $this->getAppNumber(),
			$keys[2] => $this->getAppParent(),
			$keys[3] => $this->getAppStatus(),
			$keys[4] => $this->getProUid(),
			$keys[5] => $this->getAppProcStatus(),
			$keys[6] => $this->getAppProcCode(),
			$keys[7] => $this->getAppParallel(),
			$keys[8] => $this->getAppInitUser(),
			$keys[9] => $this->getAppCurUser(),
			$keys[10] => $this->getAppCreateDate(),
			$keys[11] => $this->getAppInitDate(),
			$keys[12] => $this->getAppFinishDate(),
			$keys[13] => $this->getAppUpdateDate(),
			$keys[14] => $this->getAppData(),
			$keys[15] => $this->getAppPin(),
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
		$pos = ApplicationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAppUid($value);
				break;
			case 1:
				$this->setAppNumber($value);
				break;
			case 2:
				$this->setAppParent($value);
				break;
			case 3:
				$this->setAppStatus($value);
				break;
			case 4:
				$this->setProUid($value);
				break;
			case 5:
				$this->setAppProcStatus($value);
				break;
			case 6:
				$this->setAppProcCode($value);
				break;
			case 7:
				$this->setAppParallel($value);
				break;
			case 8:
				$this->setAppInitUser($value);
				break;
			case 9:
				$this->setAppCurUser($value);
				break;
			case 10:
				$this->setAppCreateDate($value);
				break;
			case 11:
				$this->setAppInitDate($value);
				break;
			case 12:
				$this->setAppFinishDate($value);
				break;
			case 13:
				$this->setAppUpdateDate($value);
				break;
			case 14:
				$this->setAppData($value);
				break;
			case 15:
				$this->setAppPin($value);
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
		$keys = ApplicationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAppUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAppNumber($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAppParent($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAppStatus($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setProUid($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAppProcStatus($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAppProcCode($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAppParallel($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAppInitUser($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAppCurUser($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAppCreateDate($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAppInitDate($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAppFinishDate($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAppUpdateDate($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setAppData($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setAppPin($arr[$keys[15]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ApplicationPeer::DATABASE_NAME);

		if ($this->isColumnModified(ApplicationPeer::APP_UID)) $criteria->add(ApplicationPeer::APP_UID, $this->app_uid);
		if ($this->isColumnModified(ApplicationPeer::APP_NUMBER)) $criteria->add(ApplicationPeer::APP_NUMBER, $this->app_number);
		if ($this->isColumnModified(ApplicationPeer::APP_PARENT)) $criteria->add(ApplicationPeer::APP_PARENT, $this->app_parent);
		if ($this->isColumnModified(ApplicationPeer::APP_STATUS)) $criteria->add(ApplicationPeer::APP_STATUS, $this->app_status);
		if ($this->isColumnModified(ApplicationPeer::PRO_UID)) $criteria->add(ApplicationPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(ApplicationPeer::APP_PROC_STATUS)) $criteria->add(ApplicationPeer::APP_PROC_STATUS, $this->app_proc_status);
		if ($this->isColumnModified(ApplicationPeer::APP_PROC_CODE)) $criteria->add(ApplicationPeer::APP_PROC_CODE, $this->app_proc_code);
		if ($this->isColumnModified(ApplicationPeer::APP_PARALLEL)) $criteria->add(ApplicationPeer::APP_PARALLEL, $this->app_parallel);
		if ($this->isColumnModified(ApplicationPeer::APP_INIT_USER)) $criteria->add(ApplicationPeer::APP_INIT_USER, $this->app_init_user);
		if ($this->isColumnModified(ApplicationPeer::APP_CUR_USER)) $criteria->add(ApplicationPeer::APP_CUR_USER, $this->app_cur_user);
		if ($this->isColumnModified(ApplicationPeer::APP_CREATE_DATE)) $criteria->add(ApplicationPeer::APP_CREATE_DATE, $this->app_create_date);
		if ($this->isColumnModified(ApplicationPeer::APP_INIT_DATE)) $criteria->add(ApplicationPeer::APP_INIT_DATE, $this->app_init_date);
		if ($this->isColumnModified(ApplicationPeer::APP_FINISH_DATE)) $criteria->add(ApplicationPeer::APP_FINISH_DATE, $this->app_finish_date);
		if ($this->isColumnModified(ApplicationPeer::APP_UPDATE_DATE)) $criteria->add(ApplicationPeer::APP_UPDATE_DATE, $this->app_update_date);
		if ($this->isColumnModified(ApplicationPeer::APP_DATA)) $criteria->add(ApplicationPeer::APP_DATA, $this->app_data);
		if ($this->isColumnModified(ApplicationPeer::APP_PIN)) $criteria->add(ApplicationPeer::APP_PIN, $this->app_pin);

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
		$criteria = new Criteria(ApplicationPeer::DATABASE_NAME);
		$criteria->add(ApplicationPeer::APP_UID, $this->app_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getAppUid();
	}

	/**
	 * Generic method to set the primary key (app_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setAppUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getAppUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Application (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAppUid($this->getAppUid());
		$copyObj->setAppNumber($this->getAppNumber());
		$copyObj->setAppParent($this->getAppParent());
		$copyObj->setAppStatus($this->getAppStatus());
		$copyObj->setProUid($this->getProUid());
		$copyObj->setAppProcStatus($this->getAppProcStatus());
		$copyObj->setAppProcCode($this->getAppProcCode());
		$copyObj->setAppParallel($this->getAppParallel());
		$copyObj->setAppInitUser($this->getAppInitUser());
		$copyObj->setAppCurUser($this->getAppCurUser());
		$copyObj->setAppCreateDate($this->getAppCreateDate());
		$copyObj->setAppInitDate($this->getAppInitDate());
		$copyObj->setAppFinishDate($this->getAppFinishDate());
		$copyObj->setAppUpdateDate($this->getAppUpdateDate());
		$copyObj->setAppData($this->getAppData());
		$copyObj->setAppPin($this->getAppPin());
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
	 * @return     Application Clone of current object.
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
	 * @return     ApplicationPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ApplicationPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->app_uid = null;
		$this->app_number = null;
		$this->app_parent = null;
		$this->app_status = null;
		$this->pro_uid = null;
		$this->app_proc_status = null;
		$this->app_proc_code = null;
		$this->app_parallel = null;
		$this->app_init_user = null;
		$this->app_cur_user = null;
		$this->app_create_date = null;
		$this->app_init_date = null;
		$this->app_finish_date = null;
		$this->app_update_date = null;
		$this->app_data = null;
		$this->app_pin = null;
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
		return (string) $this->exportTo(ApplicationPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseApplication
