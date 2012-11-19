<?php


/**
 * Base class that represents a row from the 'CASE_SCHEDULER' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseCaseScheduler extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'CaseSchedulerPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CaseSchedulerPeer
	 */
	protected static $peer;

	/**
	 * The value for the sch_uid field.
	 * @var        string
	 */
	protected $sch_uid;

	/**
	 * The value for the sch_del_user_name field.
	 * @var        string
	 */
	protected $sch_del_user_name;

	/**
	 * The value for the sch_del_user_pass field.
	 * @var        string
	 */
	protected $sch_del_user_pass;

	/**
	 * The value for the sch_del_user_uid field.
	 * @var        string
	 */
	protected $sch_del_user_uid;

	/**
	 * The value for the sch_name field.
	 * @var        string
	 */
	protected $sch_name;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the tas_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_uid;

	/**
	 * The value for the sch_time_next_run field.
	 * @var        string
	 */
	protected $sch_time_next_run;

	/**
	 * The value for the sch_last_run_time field.
	 * @var        string
	 */
	protected $sch_last_run_time;

	/**
	 * The value for the sch_state field.
	 * Note: this column has a database default value of: 'ACTIVE'
	 * @var        string
	 */
	protected $sch_state;

	/**
	 * The value for the sch_last_state field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $sch_last_state;

	/**
	 * The value for the usr_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_uid;

	/**
	 * The value for the sch_option field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $sch_option;

	/**
	 * The value for the sch_start_time field.
	 * @var        string
	 */
	protected $sch_start_time;

	/**
	 * The value for the sch_start_date field.
	 * @var        string
	 */
	protected $sch_start_date;

	/**
	 * The value for the sch_days_perform_task field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $sch_days_perform_task;

	/**
	 * The value for the sch_every_days field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $sch_every_days;

	/**
	 * The value for the sch_week_days field.
	 * Note: this column has a database default value of: '0|0|0|0|0|0|0'
	 * @var        string
	 */
	protected $sch_week_days;

	/**
	 * The value for the sch_start_day field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $sch_start_day;

	/**
	 * The value for the sch_months field.
	 * Note: this column has a database default value of: '0|0|0|0|0|0|0|0|0|0|0|0'
	 * @var        string
	 */
	protected $sch_months;

	/**
	 * The value for the sch_end_date field.
	 * @var        string
	 */
	protected $sch_end_date;

	/**
	 * The value for the sch_repeat_every field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $sch_repeat_every;

	/**
	 * The value for the sch_repeat_until field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $sch_repeat_until;

	/**
	 * The value for the sch_repeat_stop_if_running field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $sch_repeat_stop_if_running;

	/**
	 * The value for the case_sh_plugin_uid field.
	 * @var        string
	 */
	protected $case_sh_plugin_uid;

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
		$this->pro_uid = '';
		$this->tas_uid = '';
		$this->sch_state = 'ACTIVE';
		$this->sch_last_state = '';
		$this->usr_uid = '';
		$this->sch_option = 0;
		$this->sch_days_perform_task = '';
		$this->sch_every_days = 0;
		$this->sch_week_days = '0|0|0|0|0|0|0';
		$this->sch_start_day = '';
		$this->sch_months = '0|0|0|0|0|0|0|0|0|0|0|0';
		$this->sch_repeat_every = '';
		$this->sch_repeat_until = '';
		$this->sch_repeat_stop_if_running = 0;
	}

	/**
	 * Initializes internal state of BaseCaseScheduler object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [sch_uid] column value.
	 * 
	 * @return     string
	 */
	public function getSchUid()
	{
		return $this->sch_uid;
	}

	/**
	 * Get the [sch_del_user_name] column value.
	 * 
	 * @return     string
	 */
	public function getSchDelUserName()
	{
		return $this->sch_del_user_name;
	}

	/**
	 * Get the [sch_del_user_pass] column value.
	 * 
	 * @return     string
	 */
	public function getSchDelUserPass()
	{
		return $this->sch_del_user_pass;
	}

	/**
	 * Get the [sch_del_user_uid] column value.
	 * 
	 * @return     string
	 */
	public function getSchDelUserUid()
	{
		return $this->sch_del_user_uid;
	}

	/**
	 * Get the [sch_name] column value.
	 * 
	 * @return     string
	 */
	public function getSchName()
	{
		return $this->sch_name;
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
	 * Get the [tas_uid] column value.
	 * 
	 * @return     string
	 */
	public function getTasUid()
	{
		return $this->tas_uid;
	}

	/**
	 * Get the [optionally formatted] temporal [sch_time_next_run] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSchTimeNextRun($format = 'Y-m-d H:i:s')
	{
		if ($this->sch_time_next_run === null) {
			return null;
		}


		if ($this->sch_time_next_run === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->sch_time_next_run);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sch_time_next_run, true), $x);
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
	 * Get the [optionally formatted] temporal [sch_last_run_time] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSchLastRunTime($format = 'Y-m-d H:i:s')
	{
		if ($this->sch_last_run_time === null) {
			return null;
		}


		if ($this->sch_last_run_time === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->sch_last_run_time);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sch_last_run_time, true), $x);
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
	 * Get the [sch_state] column value.
	 * 
	 * @return     string
	 */
	public function getSchState()
	{
		return $this->sch_state;
	}

	/**
	 * Get the [sch_last_state] column value.
	 * 
	 * @return     string
	 */
	public function getSchLastState()
	{
		return $this->sch_last_state;
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
	 * Get the [sch_option] column value.
	 * 
	 * @return     int
	 */
	public function getSchOption()
	{
		return $this->sch_option;
	}

	/**
	 * Get the [optionally formatted] temporal [sch_start_time] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSchStartTime($format = 'Y-m-d H:i:s')
	{
		if ($this->sch_start_time === null) {
			return null;
		}


		if ($this->sch_start_time === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->sch_start_time);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sch_start_time, true), $x);
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
	 * Get the [optionally formatted] temporal [sch_start_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSchStartDate($format = 'Y-m-d H:i:s')
	{
		if ($this->sch_start_date === null) {
			return null;
		}


		if ($this->sch_start_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->sch_start_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sch_start_date, true), $x);
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
	 * Get the [sch_days_perform_task] column value.
	 * 
	 * @return     string
	 */
	public function getSchDaysPerformTask()
	{
		return $this->sch_days_perform_task;
	}

	/**
	 * Get the [sch_every_days] column value.
	 * 
	 * @return     int
	 */
	public function getSchEveryDays()
	{
		return $this->sch_every_days;
	}

	/**
	 * Get the [sch_week_days] column value.
	 * 
	 * @return     string
	 */
	public function getSchWeekDays()
	{
		return $this->sch_week_days;
	}

	/**
	 * Get the [sch_start_day] column value.
	 * 
	 * @return     string
	 */
	public function getSchStartDay()
	{
		return $this->sch_start_day;
	}

	/**
	 * Get the [sch_months] column value.
	 * 
	 * @return     string
	 */
	public function getSchMonths()
	{
		return $this->sch_months;
	}

	/**
	 * Get the [optionally formatted] temporal [sch_end_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSchEndDate($format = 'Y-m-d H:i:s')
	{
		if ($this->sch_end_date === null) {
			return null;
		}


		if ($this->sch_end_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->sch_end_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sch_end_date, true), $x);
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
	 * Get the [sch_repeat_every] column value.
	 * 
	 * @return     string
	 */
	public function getSchRepeatEvery()
	{
		return $this->sch_repeat_every;
	}

	/**
	 * Get the [sch_repeat_until] column value.
	 * 
	 * @return     string
	 */
	public function getSchRepeatUntil()
	{
		return $this->sch_repeat_until;
	}

	/**
	 * Get the [sch_repeat_stop_if_running] column value.
	 * 
	 * @return     int
	 */
	public function getSchRepeatStopIfRunning()
	{
		return $this->sch_repeat_stop_if_running;
	}

	/**
	 * Get the [case_sh_plugin_uid] column value.
	 * 
	 * @return     string
	 */
	public function getCaseShPluginUid()
	{
		return $this->case_sh_plugin_uid;
	}

	/**
	 * Set the value of [sch_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_uid !== $v) {
			$this->sch_uid = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_UID;
		}

		return $this;
	} // setSchUid()

	/**
	 * Set the value of [sch_del_user_name] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchDelUserName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_del_user_name !== $v) {
			$this->sch_del_user_name = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_DEL_USER_NAME;
		}

		return $this;
	} // setSchDelUserName()

	/**
	 * Set the value of [sch_del_user_pass] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchDelUserPass($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_del_user_pass !== $v) {
			$this->sch_del_user_pass = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_DEL_USER_PASS;
		}

		return $this;
	} // setSchDelUserPass()

	/**
	 * Set the value of [sch_del_user_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchDelUserUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_del_user_uid !== $v) {
			$this->sch_del_user_uid = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_DEL_USER_UID;
		}

		return $this;
	} // setSchDelUserUid()

	/**
	 * Set the value of [sch_name] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_name !== $v) {
			$this->sch_name = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_NAME;
		}

		return $this;
	} // setSchName()

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [tas_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setTasUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_uid !== $v) {
			$this->tas_uid = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::TAS_UID;
		}

		return $this;
	} // setTasUid()

	/**
	 * Sets the value of [sch_time_next_run] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchTimeNextRun($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->sch_time_next_run !== null || $dt !== null) {
			$currentDateAsString = ($this->sch_time_next_run !== null && $tmpDt = new DateTime($this->sch_time_next_run)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->sch_time_next_run = $newDateAsString;
				$this->modifiedColumns[] = CaseSchedulerPeer::SCH_TIME_NEXT_RUN;
			}
		} // if either are not null

		return $this;
	} // setSchTimeNextRun()

	/**
	 * Sets the value of [sch_last_run_time] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchLastRunTime($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->sch_last_run_time !== null || $dt !== null) {
			$currentDateAsString = ($this->sch_last_run_time !== null && $tmpDt = new DateTime($this->sch_last_run_time)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->sch_last_run_time = $newDateAsString;
				$this->modifiedColumns[] = CaseSchedulerPeer::SCH_LAST_RUN_TIME;
			}
		} // if either are not null

		return $this;
	} // setSchLastRunTime()

	/**
	 * Set the value of [sch_state] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_state !== $v) {
			$this->sch_state = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_STATE;
		}

		return $this;
	} // setSchState()

	/**
	 * Set the value of [sch_last_state] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchLastState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_last_state !== $v) {
			$this->sch_last_state = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_LAST_STATE;
		}

		return $this;
	} // setSchLastState()

	/**
	 * Set the value of [usr_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setUsrUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_uid !== $v) {
			$this->usr_uid = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::USR_UID;
		}

		return $this;
	} // setUsrUid()

	/**
	 * Set the value of [sch_option] column.
	 * 
	 * @param      int $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchOption($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->sch_option !== $v) {
			$this->sch_option = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_OPTION;
		}

		return $this;
	} // setSchOption()

	/**
	 * Sets the value of [sch_start_time] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchStartTime($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->sch_start_time !== null || $dt !== null) {
			$currentDateAsString = ($this->sch_start_time !== null && $tmpDt = new DateTime($this->sch_start_time)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->sch_start_time = $newDateAsString;
				$this->modifiedColumns[] = CaseSchedulerPeer::SCH_START_TIME;
			}
		} // if either are not null

		return $this;
	} // setSchStartTime()

	/**
	 * Sets the value of [sch_start_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchStartDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->sch_start_date !== null || $dt !== null) {
			$currentDateAsString = ($this->sch_start_date !== null && $tmpDt = new DateTime($this->sch_start_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->sch_start_date = $newDateAsString;
				$this->modifiedColumns[] = CaseSchedulerPeer::SCH_START_DATE;
			}
		} // if either are not null

		return $this;
	} // setSchStartDate()

	/**
	 * Set the value of [sch_days_perform_task] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchDaysPerformTask($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_days_perform_task !== $v) {
			$this->sch_days_perform_task = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_DAYS_PERFORM_TASK;
		}

		return $this;
	} // setSchDaysPerformTask()

	/**
	 * Set the value of [sch_every_days] column.
	 * 
	 * @param      int $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchEveryDays($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->sch_every_days !== $v) {
			$this->sch_every_days = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_EVERY_DAYS;
		}

		return $this;
	} // setSchEveryDays()

	/**
	 * Set the value of [sch_week_days] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchWeekDays($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_week_days !== $v) {
			$this->sch_week_days = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_WEEK_DAYS;
		}

		return $this;
	} // setSchWeekDays()

	/**
	 * Set the value of [sch_start_day] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchStartDay($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_start_day !== $v) {
			$this->sch_start_day = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_START_DAY;
		}

		return $this;
	} // setSchStartDay()

	/**
	 * Set the value of [sch_months] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchMonths($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_months !== $v) {
			$this->sch_months = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_MONTHS;
		}

		return $this;
	} // setSchMonths()

	/**
	 * Sets the value of [sch_end_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchEndDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->sch_end_date !== null || $dt !== null) {
			$currentDateAsString = ($this->sch_end_date !== null && $tmpDt = new DateTime($this->sch_end_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->sch_end_date = $newDateAsString;
				$this->modifiedColumns[] = CaseSchedulerPeer::SCH_END_DATE;
			}
		} // if either are not null

		return $this;
	} // setSchEndDate()

	/**
	 * Set the value of [sch_repeat_every] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchRepeatEvery($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_repeat_every !== $v) {
			$this->sch_repeat_every = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_REPEAT_EVERY;
		}

		return $this;
	} // setSchRepeatEvery()

	/**
	 * Set the value of [sch_repeat_until] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchRepeatUntil($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_repeat_until !== $v) {
			$this->sch_repeat_until = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_REPEAT_UNTIL;
		}

		return $this;
	} // setSchRepeatUntil()

	/**
	 * Set the value of [sch_repeat_stop_if_running] column.
	 * 
	 * @param      int $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setSchRepeatStopIfRunning($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->sch_repeat_stop_if_running !== $v) {
			$this->sch_repeat_stop_if_running = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::SCH_REPEAT_STOP_IF_RUNNING;
		}

		return $this;
	} // setSchRepeatStopIfRunning()

	/**
	 * Set the value of [case_sh_plugin_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     CaseScheduler The current object (for fluent API support)
	 */
	public function setCaseShPluginUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->case_sh_plugin_uid !== $v) {
			$this->case_sh_plugin_uid = $v;
			$this->modifiedColumns[] = CaseSchedulerPeer::CASE_SH_PLUGIN_UID;
		}

		return $this;
	} // setCaseShPluginUid()

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
			if ($this->pro_uid !== '') {
				return false;
			}

			if ($this->tas_uid !== '') {
				return false;
			}

			if ($this->sch_state !== 'ACTIVE') {
				return false;
			}

			if ($this->sch_last_state !== '') {
				return false;
			}

			if ($this->usr_uid !== '') {
				return false;
			}

			if ($this->sch_option !== 0) {
				return false;
			}

			if ($this->sch_days_perform_task !== '') {
				return false;
			}

			if ($this->sch_every_days !== 0) {
				return false;
			}

			if ($this->sch_week_days !== '0|0|0|0|0|0|0') {
				return false;
			}

			if ($this->sch_start_day !== '') {
				return false;
			}

			if ($this->sch_months !== '0|0|0|0|0|0|0|0|0|0|0|0') {
				return false;
			}

			if ($this->sch_repeat_every !== '') {
				return false;
			}

			if ($this->sch_repeat_until !== '') {
				return false;
			}

			if ($this->sch_repeat_stop_if_running !== 0) {
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

			$this->sch_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->sch_del_user_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->sch_del_user_pass = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->sch_del_user_uid = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->sch_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->pro_uid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->tas_uid = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->sch_time_next_run = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->sch_last_run_time = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->sch_state = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->sch_last_state = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->usr_uid = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->sch_option = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->sch_start_time = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->sch_start_date = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->sch_days_perform_task = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->sch_every_days = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->sch_week_days = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->sch_start_day = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->sch_months = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->sch_end_date = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->sch_repeat_every = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->sch_repeat_until = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->sch_repeat_stop_if_running = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->case_sh_plugin_uid = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 25; // 25 = CaseSchedulerPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating CaseScheduler object", $e);
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
			$con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CaseSchedulerPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = CaseSchedulerQuery::create()
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
			$con = Propel::getConnection(CaseSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				CaseSchedulerPeer::addInstanceToPool($this);
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
					$affectedRows = CaseSchedulerPeer::doUpdate($this, $con);
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


			if (($retval = CaseSchedulerPeer::doValidate($this, $columns)) !== true) {
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
		$pos = CaseSchedulerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSchUid();
				break;
			case 1:
				return $this->getSchDelUserName();
				break;
			case 2:
				return $this->getSchDelUserPass();
				break;
			case 3:
				return $this->getSchDelUserUid();
				break;
			case 4:
				return $this->getSchName();
				break;
			case 5:
				return $this->getProUid();
				break;
			case 6:
				return $this->getTasUid();
				break;
			case 7:
				return $this->getSchTimeNextRun();
				break;
			case 8:
				return $this->getSchLastRunTime();
				break;
			case 9:
				return $this->getSchState();
				break;
			case 10:
				return $this->getSchLastState();
				break;
			case 11:
				return $this->getUsrUid();
				break;
			case 12:
				return $this->getSchOption();
				break;
			case 13:
				return $this->getSchStartTime();
				break;
			case 14:
				return $this->getSchStartDate();
				break;
			case 15:
				return $this->getSchDaysPerformTask();
				break;
			case 16:
				return $this->getSchEveryDays();
				break;
			case 17:
				return $this->getSchWeekDays();
				break;
			case 18:
				return $this->getSchStartDay();
				break;
			case 19:
				return $this->getSchMonths();
				break;
			case 20:
				return $this->getSchEndDate();
				break;
			case 21:
				return $this->getSchRepeatEvery();
				break;
			case 22:
				return $this->getSchRepeatUntil();
				break;
			case 23:
				return $this->getSchRepeatStopIfRunning();
				break;
			case 24:
				return $this->getCaseShPluginUid();
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
		if (isset($alreadyDumpedObjects['CaseScheduler'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['CaseScheduler'][$this->getPrimaryKey()] = true;
		$keys = CaseSchedulerPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getSchUid(),
			$keys[1] => $this->getSchDelUserName(),
			$keys[2] => $this->getSchDelUserPass(),
			$keys[3] => $this->getSchDelUserUid(),
			$keys[4] => $this->getSchName(),
			$keys[5] => $this->getProUid(),
			$keys[6] => $this->getTasUid(),
			$keys[7] => $this->getSchTimeNextRun(),
			$keys[8] => $this->getSchLastRunTime(),
			$keys[9] => $this->getSchState(),
			$keys[10] => $this->getSchLastState(),
			$keys[11] => $this->getUsrUid(),
			$keys[12] => $this->getSchOption(),
			$keys[13] => $this->getSchStartTime(),
			$keys[14] => $this->getSchStartDate(),
			$keys[15] => $this->getSchDaysPerformTask(),
			$keys[16] => $this->getSchEveryDays(),
			$keys[17] => $this->getSchWeekDays(),
			$keys[18] => $this->getSchStartDay(),
			$keys[19] => $this->getSchMonths(),
			$keys[20] => $this->getSchEndDate(),
			$keys[21] => $this->getSchRepeatEvery(),
			$keys[22] => $this->getSchRepeatUntil(),
			$keys[23] => $this->getSchRepeatStopIfRunning(),
			$keys[24] => $this->getCaseShPluginUid(),
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
		$pos = CaseSchedulerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSchUid($value);
				break;
			case 1:
				$this->setSchDelUserName($value);
				break;
			case 2:
				$this->setSchDelUserPass($value);
				break;
			case 3:
				$this->setSchDelUserUid($value);
				break;
			case 4:
				$this->setSchName($value);
				break;
			case 5:
				$this->setProUid($value);
				break;
			case 6:
				$this->setTasUid($value);
				break;
			case 7:
				$this->setSchTimeNextRun($value);
				break;
			case 8:
				$this->setSchLastRunTime($value);
				break;
			case 9:
				$this->setSchState($value);
				break;
			case 10:
				$this->setSchLastState($value);
				break;
			case 11:
				$this->setUsrUid($value);
				break;
			case 12:
				$this->setSchOption($value);
				break;
			case 13:
				$this->setSchStartTime($value);
				break;
			case 14:
				$this->setSchStartDate($value);
				break;
			case 15:
				$this->setSchDaysPerformTask($value);
				break;
			case 16:
				$this->setSchEveryDays($value);
				break;
			case 17:
				$this->setSchWeekDays($value);
				break;
			case 18:
				$this->setSchStartDay($value);
				break;
			case 19:
				$this->setSchMonths($value);
				break;
			case 20:
				$this->setSchEndDate($value);
				break;
			case 21:
				$this->setSchRepeatEvery($value);
				break;
			case 22:
				$this->setSchRepeatUntil($value);
				break;
			case 23:
				$this->setSchRepeatStopIfRunning($value);
				break;
			case 24:
				$this->setCaseShPluginUid($value);
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
		$keys = CaseSchedulerPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setSchUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSchDelUserName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSchDelUserPass($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSchDelUserUid($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSchName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setProUid($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTasUid($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSchTimeNextRun($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSchLastRunTime($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSchState($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSchLastState($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setUsrUid($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setSchOption($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setSchStartTime($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setSchStartDate($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setSchDaysPerformTask($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setSchEveryDays($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setSchWeekDays($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setSchStartDay($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setSchMonths($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setSchEndDate($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setSchRepeatEvery($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setSchRepeatUntil($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setSchRepeatStopIfRunning($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setCaseShPluginUid($arr[$keys[24]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CaseSchedulerPeer::DATABASE_NAME);

		if ($this->isColumnModified(CaseSchedulerPeer::SCH_UID)) $criteria->add(CaseSchedulerPeer::SCH_UID, $this->sch_uid);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_DEL_USER_NAME)) $criteria->add(CaseSchedulerPeer::SCH_DEL_USER_NAME, $this->sch_del_user_name);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_DEL_USER_PASS)) $criteria->add(CaseSchedulerPeer::SCH_DEL_USER_PASS, $this->sch_del_user_pass);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_DEL_USER_UID)) $criteria->add(CaseSchedulerPeer::SCH_DEL_USER_UID, $this->sch_del_user_uid);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_NAME)) $criteria->add(CaseSchedulerPeer::SCH_NAME, $this->sch_name);
		if ($this->isColumnModified(CaseSchedulerPeer::PRO_UID)) $criteria->add(CaseSchedulerPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(CaseSchedulerPeer::TAS_UID)) $criteria->add(CaseSchedulerPeer::TAS_UID, $this->tas_uid);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_TIME_NEXT_RUN)) $criteria->add(CaseSchedulerPeer::SCH_TIME_NEXT_RUN, $this->sch_time_next_run);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_LAST_RUN_TIME)) $criteria->add(CaseSchedulerPeer::SCH_LAST_RUN_TIME, $this->sch_last_run_time);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_STATE)) $criteria->add(CaseSchedulerPeer::SCH_STATE, $this->sch_state);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_LAST_STATE)) $criteria->add(CaseSchedulerPeer::SCH_LAST_STATE, $this->sch_last_state);
		if ($this->isColumnModified(CaseSchedulerPeer::USR_UID)) $criteria->add(CaseSchedulerPeer::USR_UID, $this->usr_uid);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_OPTION)) $criteria->add(CaseSchedulerPeer::SCH_OPTION, $this->sch_option);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_START_TIME)) $criteria->add(CaseSchedulerPeer::SCH_START_TIME, $this->sch_start_time);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_START_DATE)) $criteria->add(CaseSchedulerPeer::SCH_START_DATE, $this->sch_start_date);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_DAYS_PERFORM_TASK)) $criteria->add(CaseSchedulerPeer::SCH_DAYS_PERFORM_TASK, $this->sch_days_perform_task);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_EVERY_DAYS)) $criteria->add(CaseSchedulerPeer::SCH_EVERY_DAYS, $this->sch_every_days);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_WEEK_DAYS)) $criteria->add(CaseSchedulerPeer::SCH_WEEK_DAYS, $this->sch_week_days);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_START_DAY)) $criteria->add(CaseSchedulerPeer::SCH_START_DAY, $this->sch_start_day);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_MONTHS)) $criteria->add(CaseSchedulerPeer::SCH_MONTHS, $this->sch_months);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_END_DATE)) $criteria->add(CaseSchedulerPeer::SCH_END_DATE, $this->sch_end_date);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_REPEAT_EVERY)) $criteria->add(CaseSchedulerPeer::SCH_REPEAT_EVERY, $this->sch_repeat_every);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_REPEAT_UNTIL)) $criteria->add(CaseSchedulerPeer::SCH_REPEAT_UNTIL, $this->sch_repeat_until);
		if ($this->isColumnModified(CaseSchedulerPeer::SCH_REPEAT_STOP_IF_RUNNING)) $criteria->add(CaseSchedulerPeer::SCH_REPEAT_STOP_IF_RUNNING, $this->sch_repeat_stop_if_running);
		if ($this->isColumnModified(CaseSchedulerPeer::CASE_SH_PLUGIN_UID)) $criteria->add(CaseSchedulerPeer::CASE_SH_PLUGIN_UID, $this->case_sh_plugin_uid);

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
		$criteria = new Criteria(CaseSchedulerPeer::DATABASE_NAME);
		$criteria->add(CaseSchedulerPeer::SCH_UID, $this->sch_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getSchUid();
	}

	/**
	 * Generic method to set the primary key (sch_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setSchUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getSchUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of CaseScheduler (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setSchUid($this->getSchUid());
		$copyObj->setSchDelUserName($this->getSchDelUserName());
		$copyObj->setSchDelUserPass($this->getSchDelUserPass());
		$copyObj->setSchDelUserUid($this->getSchDelUserUid());
		$copyObj->setSchName($this->getSchName());
		$copyObj->setProUid($this->getProUid());
		$copyObj->setTasUid($this->getTasUid());
		$copyObj->setSchTimeNextRun($this->getSchTimeNextRun());
		$copyObj->setSchLastRunTime($this->getSchLastRunTime());
		$copyObj->setSchState($this->getSchState());
		$copyObj->setSchLastState($this->getSchLastState());
		$copyObj->setUsrUid($this->getUsrUid());
		$copyObj->setSchOption($this->getSchOption());
		$copyObj->setSchStartTime($this->getSchStartTime());
		$copyObj->setSchStartDate($this->getSchStartDate());
		$copyObj->setSchDaysPerformTask($this->getSchDaysPerformTask());
		$copyObj->setSchEveryDays($this->getSchEveryDays());
		$copyObj->setSchWeekDays($this->getSchWeekDays());
		$copyObj->setSchStartDay($this->getSchStartDay());
		$copyObj->setSchMonths($this->getSchMonths());
		$copyObj->setSchEndDate($this->getSchEndDate());
		$copyObj->setSchRepeatEvery($this->getSchRepeatEvery());
		$copyObj->setSchRepeatUntil($this->getSchRepeatUntil());
		$copyObj->setSchRepeatStopIfRunning($this->getSchRepeatStopIfRunning());
		$copyObj->setCaseShPluginUid($this->getCaseShPluginUid());
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
	 * @return     CaseScheduler Clone of current object.
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
	 * @return     CaseSchedulerPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CaseSchedulerPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->sch_uid = null;
		$this->sch_del_user_name = null;
		$this->sch_del_user_pass = null;
		$this->sch_del_user_uid = null;
		$this->sch_name = null;
		$this->pro_uid = null;
		$this->tas_uid = null;
		$this->sch_time_next_run = null;
		$this->sch_last_run_time = null;
		$this->sch_state = null;
		$this->sch_last_state = null;
		$this->usr_uid = null;
		$this->sch_option = null;
		$this->sch_start_time = null;
		$this->sch_start_date = null;
		$this->sch_days_perform_task = null;
		$this->sch_every_days = null;
		$this->sch_week_days = null;
		$this->sch_start_day = null;
		$this->sch_months = null;
		$this->sch_end_date = null;
		$this->sch_repeat_every = null;
		$this->sch_repeat_until = null;
		$this->sch_repeat_stop_if_running = null;
		$this->case_sh_plugin_uid = null;
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
		return (string) $this->exportTo(CaseSchedulerPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseCaseScheduler
