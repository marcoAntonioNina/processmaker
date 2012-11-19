<?php


/**
 * Base class that represents a row from the 'APP_CACHE_VIEW' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppCacheView extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'AppCacheViewPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AppCacheViewPeer
	 */
	protected static $peer;

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
	 * The value for the app_number field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $app_number;

	/**
	 * The value for the app_status field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_status;

	/**
	 * The value for the usr_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_uid;

	/**
	 * The value for the previous_usr_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $previous_usr_uid;

	/**
	 * The value for the tas_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_uid;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the del_delegate_date field.
	 * @var        string
	 */
	protected $del_delegate_date;

	/**
	 * The value for the del_init_date field.
	 * @var        string
	 */
	protected $del_init_date;

	/**
	 * The value for the del_task_due_date field.
	 * @var        string
	 */
	protected $del_task_due_date;

	/**
	 * The value for the del_finish_date field.
	 * @var        string
	 */
	protected $del_finish_date;

	/**
	 * The value for the del_thread_status field.
	 * Note: this column has a database default value of: 'OPEN'
	 * @var        string
	 */
	protected $del_thread_status;

	/**
	 * The value for the app_thread_status field.
	 * Note: this column has a database default value of: 'OPEN'
	 * @var        string
	 */
	protected $app_thread_status;

	/**
	 * The value for the app_title field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_title;

	/**
	 * The value for the app_pro_title field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_pro_title;

	/**
	 * The value for the app_tas_title field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_tas_title;

	/**
	 * The value for the app_current_user field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_current_user;

	/**
	 * The value for the app_del_previous_user field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_del_previous_user;

	/**
	 * The value for the del_priority field.
	 * Note: this column has a database default value of: '3'
	 * @var        string
	 */
	protected $del_priority;

	/**
	 * The value for the del_duration field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $del_duration;

	/**
	 * The value for the del_queue_duration field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $del_queue_duration;

	/**
	 * The value for the del_delay_duration field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $del_delay_duration;

	/**
	 * The value for the del_started field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $del_started;

	/**
	 * The value for the del_finished field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $del_finished;

	/**
	 * The value for the del_delayed field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $del_delayed;

	/**
	 * The value for the app_create_date field.
	 * @var        string
	 */
	protected $app_create_date;

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
	 * The value for the app_overdue_percentage field.
	 * @var        double
	 */
	protected $app_overdue_percentage;

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
		$this->app_number = 0;
		$this->app_status = '';
		$this->usr_uid = '';
		$this->previous_usr_uid = '';
		$this->tas_uid = '';
		$this->pro_uid = '';
		$this->del_thread_status = 'OPEN';
		$this->app_thread_status = 'OPEN';
		$this->app_title = '';
		$this->app_pro_title = '';
		$this->app_tas_title = '';
		$this->app_current_user = '';
		$this->app_del_previous_user = '';
		$this->del_priority = '3';
		$this->del_duration = 0;
		$this->del_queue_duration = 0;
		$this->del_delay_duration = 0;
		$this->del_started = 0;
		$this->del_finished = 0;
		$this->del_delayed = 0;
	}

	/**
	 * Initializes internal state of BaseAppCacheView object.
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
	 * Get the [del_index] column value.
	 * 
	 * @return     int
	 */
	public function getDelIndex()
	{
		return $this->del_index;
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
	 * Get the [app_status] column value.
	 * 
	 * @return     string
	 */
	public function getAppStatus()
	{
		return $this->app_status;
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
	 * Get the [previous_usr_uid] column value.
	 * 
	 * @return     string
	 */
	public function getPreviousUsrUid()
	{
		return $this->previous_usr_uid;
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
	 * Get the [pro_uid] column value.
	 * 
	 * @return     string
	 */
	public function getProUid()
	{
		return $this->pro_uid;
	}

	/**
	 * Get the [optionally formatted] temporal [del_delegate_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDelDelegateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->del_delegate_date === null) {
			return null;
		}


		if ($this->del_delegate_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->del_delegate_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->del_delegate_date, true), $x);
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
	 * Get the [optionally formatted] temporal [del_init_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDelInitDate($format = 'Y-m-d H:i:s')
	{
		if ($this->del_init_date === null) {
			return null;
		}


		if ($this->del_init_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->del_init_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->del_init_date, true), $x);
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
	 * Get the [optionally formatted] temporal [del_task_due_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDelTaskDueDate($format = 'Y-m-d H:i:s')
	{
		if ($this->del_task_due_date === null) {
			return null;
		}


		if ($this->del_task_due_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->del_task_due_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->del_task_due_date, true), $x);
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
	 * Get the [optionally formatted] temporal [del_finish_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDelFinishDate($format = 'Y-m-d H:i:s')
	{
		if ($this->del_finish_date === null) {
			return null;
		}


		if ($this->del_finish_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->del_finish_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->del_finish_date, true), $x);
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
	 * Get the [del_thread_status] column value.
	 * 
	 * @return     string
	 */
	public function getDelThreadStatus()
	{
		return $this->del_thread_status;
	}

	/**
	 * Get the [app_thread_status] column value.
	 * 
	 * @return     string
	 */
	public function getAppThreadStatus()
	{
		return $this->app_thread_status;
	}

	/**
	 * Get the [app_title] column value.
	 * 
	 * @return     string
	 */
	public function getAppTitle()
	{
		return $this->app_title;
	}

	/**
	 * Get the [app_pro_title] column value.
	 * 
	 * @return     string
	 */
	public function getAppProTitle()
	{
		return $this->app_pro_title;
	}

	/**
	 * Get the [app_tas_title] column value.
	 * 
	 * @return     string
	 */
	public function getAppTasTitle()
	{
		return $this->app_tas_title;
	}

	/**
	 * Get the [app_current_user] column value.
	 * 
	 * @return     string
	 */
	public function getAppCurrentUser()
	{
		return $this->app_current_user;
	}

	/**
	 * Get the [app_del_previous_user] column value.
	 * 
	 * @return     string
	 */
	public function getAppDelPreviousUser()
	{
		return $this->app_del_previous_user;
	}

	/**
	 * Get the [del_priority] column value.
	 * 
	 * @return     string
	 */
	public function getDelPriority()
	{
		return $this->del_priority;
	}

	/**
	 * Get the [del_duration] column value.
	 * 
	 * @return     double
	 */
	public function getDelDuration()
	{
		return $this->del_duration;
	}

	/**
	 * Get the [del_queue_duration] column value.
	 * 
	 * @return     double
	 */
	public function getDelQueueDuration()
	{
		return $this->del_queue_duration;
	}

	/**
	 * Get the [del_delay_duration] column value.
	 * 
	 * @return     double
	 */
	public function getDelDelayDuration()
	{
		return $this->del_delay_duration;
	}

	/**
	 * Get the [del_started] column value.
	 * 
	 * @return     int
	 */
	public function getDelStarted()
	{
		return $this->del_started;
	}

	/**
	 * Get the [del_finished] column value.
	 * 
	 * @return     int
	 */
	public function getDelFinished()
	{
		return $this->del_finished;
	}

	/**
	 * Get the [del_delayed] column value.
	 * 
	 * @return     int
	 */
	public function getDelDelayed()
	{
		return $this->del_delayed;
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
	 * Get the [app_overdue_percentage] column value.
	 * 
	 * @return     double
	 */
	public function getAppOverduePercentage()
	{
		return $this->app_overdue_percentage;
	}

	/**
	 * Set the value of [app_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_uid !== $v) {
			$this->app_uid = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_UID;
		}

		return $this;
	} // setAppUid()

	/**
	 * Set the value of [del_index] column.
	 * 
	 * @param      int $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelIndex($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->del_index !== $v) {
			$this->del_index = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::DEL_INDEX;
		}

		return $this;
	} // setDelIndex()

	/**
	 * Set the value of [app_number] column.
	 * 
	 * @param      int $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppNumber($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->app_number !== $v) {
			$this->app_number = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_NUMBER;
		}

		return $this;
	} // setAppNumber()

	/**
	 * Set the value of [app_status] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_status !== $v) {
			$this->app_status = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_STATUS;
		}

		return $this;
	} // setAppStatus()

	/**
	 * Set the value of [usr_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setUsrUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_uid !== $v) {
			$this->usr_uid = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::USR_UID;
		}

		return $this;
	} // setUsrUid()

	/**
	 * Set the value of [previous_usr_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setPreviousUsrUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->previous_usr_uid !== $v) {
			$this->previous_usr_uid = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::PREVIOUS_USR_UID;
		}

		return $this;
	} // setPreviousUsrUid()

	/**
	 * Set the value of [tas_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setTasUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_uid !== $v) {
			$this->tas_uid = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::TAS_UID;
		}

		return $this;
	} // setTasUid()

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Sets the value of [del_delegate_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelDelegateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->del_delegate_date !== null || $dt !== null) {
			$currentDateAsString = ($this->del_delegate_date !== null && $tmpDt = new DateTime($this->del_delegate_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->del_delegate_date = $newDateAsString;
				$this->modifiedColumns[] = AppCacheViewPeer::DEL_DELEGATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setDelDelegateDate()

	/**
	 * Sets the value of [del_init_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelInitDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->del_init_date !== null || $dt !== null) {
			$currentDateAsString = ($this->del_init_date !== null && $tmpDt = new DateTime($this->del_init_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->del_init_date = $newDateAsString;
				$this->modifiedColumns[] = AppCacheViewPeer::DEL_INIT_DATE;
			}
		} // if either are not null

		return $this;
	} // setDelInitDate()

	/**
	 * Sets the value of [del_task_due_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelTaskDueDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->del_task_due_date !== null || $dt !== null) {
			$currentDateAsString = ($this->del_task_due_date !== null && $tmpDt = new DateTime($this->del_task_due_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->del_task_due_date = $newDateAsString;
				$this->modifiedColumns[] = AppCacheViewPeer::DEL_TASK_DUE_DATE;
			}
		} // if either are not null

		return $this;
	} // setDelTaskDueDate()

	/**
	 * Sets the value of [del_finish_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelFinishDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->del_finish_date !== null || $dt !== null) {
			$currentDateAsString = ($this->del_finish_date !== null && $tmpDt = new DateTime($this->del_finish_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->del_finish_date = $newDateAsString;
				$this->modifiedColumns[] = AppCacheViewPeer::DEL_FINISH_DATE;
			}
		} // if either are not null

		return $this;
	} // setDelFinishDate()

	/**
	 * Set the value of [del_thread_status] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelThreadStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->del_thread_status !== $v) {
			$this->del_thread_status = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::DEL_THREAD_STATUS;
		}

		return $this;
	} // setDelThreadStatus()

	/**
	 * Set the value of [app_thread_status] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppThreadStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_thread_status !== $v) {
			$this->app_thread_status = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_THREAD_STATUS;
		}

		return $this;
	} // setAppThreadStatus()

	/**
	 * Set the value of [app_title] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_title !== $v) {
			$this->app_title = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_TITLE;
		}

		return $this;
	} // setAppTitle()

	/**
	 * Set the value of [app_pro_title] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppProTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_pro_title !== $v) {
			$this->app_pro_title = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_PRO_TITLE;
		}

		return $this;
	} // setAppProTitle()

	/**
	 * Set the value of [app_tas_title] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppTasTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_tas_title !== $v) {
			$this->app_tas_title = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_TAS_TITLE;
		}

		return $this;
	} // setAppTasTitle()

	/**
	 * Set the value of [app_current_user] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppCurrentUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_current_user !== $v) {
			$this->app_current_user = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_CURRENT_USER;
		}

		return $this;
	} // setAppCurrentUser()

	/**
	 * Set the value of [app_del_previous_user] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppDelPreviousUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_del_previous_user !== $v) {
			$this->app_del_previous_user = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_DEL_PREVIOUS_USER;
		}

		return $this;
	} // setAppDelPreviousUser()

	/**
	 * Set the value of [del_priority] column.
	 * 
	 * @param      string $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelPriority($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->del_priority !== $v) {
			$this->del_priority = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::DEL_PRIORITY;
		}

		return $this;
	} // setDelPriority()

	/**
	 * Set the value of [del_duration] column.
	 * 
	 * @param      double $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelDuration($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->del_duration !== $v) {
			$this->del_duration = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::DEL_DURATION;
		}

		return $this;
	} // setDelDuration()

	/**
	 * Set the value of [del_queue_duration] column.
	 * 
	 * @param      double $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelQueueDuration($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->del_queue_duration !== $v) {
			$this->del_queue_duration = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::DEL_QUEUE_DURATION;
		}

		return $this;
	} // setDelQueueDuration()

	/**
	 * Set the value of [del_delay_duration] column.
	 * 
	 * @param      double $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelDelayDuration($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->del_delay_duration !== $v) {
			$this->del_delay_duration = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::DEL_DELAY_DURATION;
		}

		return $this;
	} // setDelDelayDuration()

	/**
	 * Set the value of [del_started] column.
	 * 
	 * @param      int $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelStarted($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->del_started !== $v) {
			$this->del_started = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::DEL_STARTED;
		}

		return $this;
	} // setDelStarted()

	/**
	 * Set the value of [del_finished] column.
	 * 
	 * @param      int $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelFinished($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->del_finished !== $v) {
			$this->del_finished = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::DEL_FINISHED;
		}

		return $this;
	} // setDelFinished()

	/**
	 * Set the value of [del_delayed] column.
	 * 
	 * @param      int $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setDelDelayed($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->del_delayed !== $v) {
			$this->del_delayed = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::DEL_DELAYED;
		}

		return $this;
	} // setDelDelayed()

	/**
	 * Sets the value of [app_create_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppCreateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_create_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_create_date !== null && $tmpDt = new DateTime($this->app_create_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_create_date = $newDateAsString;
				$this->modifiedColumns[] = AppCacheViewPeer::APP_CREATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppCreateDate()

	/**
	 * Sets the value of [app_finish_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppFinishDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_finish_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_finish_date !== null && $tmpDt = new DateTime($this->app_finish_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_finish_date = $newDateAsString;
				$this->modifiedColumns[] = AppCacheViewPeer::APP_FINISH_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppFinishDate()

	/**
	 * Sets the value of [app_update_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppUpdateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->app_update_date !== null || $dt !== null) {
			$currentDateAsString = ($this->app_update_date !== null && $tmpDt = new DateTime($this->app_update_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->app_update_date = $newDateAsString;
				$this->modifiedColumns[] = AppCacheViewPeer::APP_UPDATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setAppUpdateDate()

	/**
	 * Set the value of [app_overdue_percentage] column.
	 * 
	 * @param      double $v new value
	 * @return     AppCacheView The current object (for fluent API support)
	 */
	public function setAppOverduePercentage($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->app_overdue_percentage !== $v) {
			$this->app_overdue_percentage = $v;
			$this->modifiedColumns[] = AppCacheViewPeer::APP_OVERDUE_PERCENTAGE;
		}

		return $this;
	} // setAppOverduePercentage()

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

			if ($this->app_number !== 0) {
				return false;
			}

			if ($this->app_status !== '') {
				return false;
			}

			if ($this->usr_uid !== '') {
				return false;
			}

			if ($this->previous_usr_uid !== '') {
				return false;
			}

			if ($this->tas_uid !== '') {
				return false;
			}

			if ($this->pro_uid !== '') {
				return false;
			}

			if ($this->del_thread_status !== 'OPEN') {
				return false;
			}

			if ($this->app_thread_status !== 'OPEN') {
				return false;
			}

			if ($this->app_title !== '') {
				return false;
			}

			if ($this->app_pro_title !== '') {
				return false;
			}

			if ($this->app_tas_title !== '') {
				return false;
			}

			if ($this->app_current_user !== '') {
				return false;
			}

			if ($this->app_del_previous_user !== '') {
				return false;
			}

			if ($this->del_priority !== '3') {
				return false;
			}

			if ($this->del_duration !== 0) {
				return false;
			}

			if ($this->del_queue_duration !== 0) {
				return false;
			}

			if ($this->del_delay_duration !== 0) {
				return false;
			}

			if ($this->del_started !== 0) {
				return false;
			}

			if ($this->del_finished !== 0) {
				return false;
			}

			if ($this->del_delayed !== 0) {
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
			$this->del_index = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->app_number = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->app_status = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->usr_uid = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->previous_usr_uid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->tas_uid = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->pro_uid = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->del_delegate_date = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->del_init_date = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->del_task_due_date = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->del_finish_date = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->del_thread_status = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->app_thread_status = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->app_title = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->app_pro_title = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->app_tas_title = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->app_current_user = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->app_del_previous_user = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->del_priority = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->del_duration = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
			$this->del_queue_duration = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
			$this->del_delay_duration = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
			$this->del_started = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->del_finished = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->del_delayed = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->app_create_date = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->app_finish_date = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->app_update_date = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
			$this->app_overdue_percentage = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 30; // 30 = AppCacheViewPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating AppCacheView object", $e);
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
			$con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AppCacheViewPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = AppCacheViewQuery::create()
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
			$con = Propel::getConnection(AppCacheViewPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				AppCacheViewPeer::addInstanceToPool($this);
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
					$affectedRows = AppCacheViewPeer::doUpdate($this, $con);
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


			if (($retval = AppCacheViewPeer::doValidate($this, $columns)) !== true) {
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
		$pos = AppCacheViewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDelIndex();
				break;
			case 2:
				return $this->getAppNumber();
				break;
			case 3:
				return $this->getAppStatus();
				break;
			case 4:
				return $this->getUsrUid();
				break;
			case 5:
				return $this->getPreviousUsrUid();
				break;
			case 6:
				return $this->getTasUid();
				break;
			case 7:
				return $this->getProUid();
				break;
			case 8:
				return $this->getDelDelegateDate();
				break;
			case 9:
				return $this->getDelInitDate();
				break;
			case 10:
				return $this->getDelTaskDueDate();
				break;
			case 11:
				return $this->getDelFinishDate();
				break;
			case 12:
				return $this->getDelThreadStatus();
				break;
			case 13:
				return $this->getAppThreadStatus();
				break;
			case 14:
				return $this->getAppTitle();
				break;
			case 15:
				return $this->getAppProTitle();
				break;
			case 16:
				return $this->getAppTasTitle();
				break;
			case 17:
				return $this->getAppCurrentUser();
				break;
			case 18:
				return $this->getAppDelPreviousUser();
				break;
			case 19:
				return $this->getDelPriority();
				break;
			case 20:
				return $this->getDelDuration();
				break;
			case 21:
				return $this->getDelQueueDuration();
				break;
			case 22:
				return $this->getDelDelayDuration();
				break;
			case 23:
				return $this->getDelStarted();
				break;
			case 24:
				return $this->getDelFinished();
				break;
			case 25:
				return $this->getDelDelayed();
				break;
			case 26:
				return $this->getAppCreateDate();
				break;
			case 27:
				return $this->getAppFinishDate();
				break;
			case 28:
				return $this->getAppUpdateDate();
				break;
			case 29:
				return $this->getAppOverduePercentage();
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
		if (isset($alreadyDumpedObjects['AppCacheView'][serialize($this->getPrimaryKey())])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['AppCacheView'][serialize($this->getPrimaryKey())] = true;
		$keys = AppCacheViewPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAppUid(),
			$keys[1] => $this->getDelIndex(),
			$keys[2] => $this->getAppNumber(),
			$keys[3] => $this->getAppStatus(),
			$keys[4] => $this->getUsrUid(),
			$keys[5] => $this->getPreviousUsrUid(),
			$keys[6] => $this->getTasUid(),
			$keys[7] => $this->getProUid(),
			$keys[8] => $this->getDelDelegateDate(),
			$keys[9] => $this->getDelInitDate(),
			$keys[10] => $this->getDelTaskDueDate(),
			$keys[11] => $this->getDelFinishDate(),
			$keys[12] => $this->getDelThreadStatus(),
			$keys[13] => $this->getAppThreadStatus(),
			$keys[14] => $this->getAppTitle(),
			$keys[15] => $this->getAppProTitle(),
			$keys[16] => $this->getAppTasTitle(),
			$keys[17] => $this->getAppCurrentUser(),
			$keys[18] => $this->getAppDelPreviousUser(),
			$keys[19] => $this->getDelPriority(),
			$keys[20] => $this->getDelDuration(),
			$keys[21] => $this->getDelQueueDuration(),
			$keys[22] => $this->getDelDelayDuration(),
			$keys[23] => $this->getDelStarted(),
			$keys[24] => $this->getDelFinished(),
			$keys[25] => $this->getDelDelayed(),
			$keys[26] => $this->getAppCreateDate(),
			$keys[27] => $this->getAppFinishDate(),
			$keys[28] => $this->getAppUpdateDate(),
			$keys[29] => $this->getAppOverduePercentage(),
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
		$pos = AppCacheViewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDelIndex($value);
				break;
			case 2:
				$this->setAppNumber($value);
				break;
			case 3:
				$this->setAppStatus($value);
				break;
			case 4:
				$this->setUsrUid($value);
				break;
			case 5:
				$this->setPreviousUsrUid($value);
				break;
			case 6:
				$this->setTasUid($value);
				break;
			case 7:
				$this->setProUid($value);
				break;
			case 8:
				$this->setDelDelegateDate($value);
				break;
			case 9:
				$this->setDelInitDate($value);
				break;
			case 10:
				$this->setDelTaskDueDate($value);
				break;
			case 11:
				$this->setDelFinishDate($value);
				break;
			case 12:
				$this->setDelThreadStatus($value);
				break;
			case 13:
				$this->setAppThreadStatus($value);
				break;
			case 14:
				$this->setAppTitle($value);
				break;
			case 15:
				$this->setAppProTitle($value);
				break;
			case 16:
				$this->setAppTasTitle($value);
				break;
			case 17:
				$this->setAppCurrentUser($value);
				break;
			case 18:
				$this->setAppDelPreviousUser($value);
				break;
			case 19:
				$this->setDelPriority($value);
				break;
			case 20:
				$this->setDelDuration($value);
				break;
			case 21:
				$this->setDelQueueDuration($value);
				break;
			case 22:
				$this->setDelDelayDuration($value);
				break;
			case 23:
				$this->setDelStarted($value);
				break;
			case 24:
				$this->setDelFinished($value);
				break;
			case 25:
				$this->setDelDelayed($value);
				break;
			case 26:
				$this->setAppCreateDate($value);
				break;
			case 27:
				$this->setAppFinishDate($value);
				break;
			case 28:
				$this->setAppUpdateDate($value);
				break;
			case 29:
				$this->setAppOverduePercentage($value);
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
		$keys = AppCacheViewPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAppUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDelIndex($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAppNumber($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAppStatus($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUsrUid($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPreviousUsrUid($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTasUid($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setProUid($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDelDelegateDate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDelInitDate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDelTaskDueDate($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDelFinishDate($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDelThreadStatus($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAppThreadStatus($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setAppTitle($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setAppProTitle($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setAppTasTitle($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setAppCurrentUser($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setAppDelPreviousUser($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDelPriority($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDelDuration($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setDelQueueDuration($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDelDelayDuration($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setDelStarted($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setDelFinished($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setDelDelayed($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setAppCreateDate($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setAppFinishDate($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setAppUpdateDate($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setAppOverduePercentage($arr[$keys[29]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AppCacheViewPeer::DATABASE_NAME);

		if ($this->isColumnModified(AppCacheViewPeer::APP_UID)) $criteria->add(AppCacheViewPeer::APP_UID, $this->app_uid);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_INDEX)) $criteria->add(AppCacheViewPeer::DEL_INDEX, $this->del_index);
		if ($this->isColumnModified(AppCacheViewPeer::APP_NUMBER)) $criteria->add(AppCacheViewPeer::APP_NUMBER, $this->app_number);
		if ($this->isColumnModified(AppCacheViewPeer::APP_STATUS)) $criteria->add(AppCacheViewPeer::APP_STATUS, $this->app_status);
		if ($this->isColumnModified(AppCacheViewPeer::USR_UID)) $criteria->add(AppCacheViewPeer::USR_UID, $this->usr_uid);
		if ($this->isColumnModified(AppCacheViewPeer::PREVIOUS_USR_UID)) $criteria->add(AppCacheViewPeer::PREVIOUS_USR_UID, $this->previous_usr_uid);
		if ($this->isColumnModified(AppCacheViewPeer::TAS_UID)) $criteria->add(AppCacheViewPeer::TAS_UID, $this->tas_uid);
		if ($this->isColumnModified(AppCacheViewPeer::PRO_UID)) $criteria->add(AppCacheViewPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_DELEGATE_DATE)) $criteria->add(AppCacheViewPeer::DEL_DELEGATE_DATE, $this->del_delegate_date);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_INIT_DATE)) $criteria->add(AppCacheViewPeer::DEL_INIT_DATE, $this->del_init_date);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_TASK_DUE_DATE)) $criteria->add(AppCacheViewPeer::DEL_TASK_DUE_DATE, $this->del_task_due_date);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_FINISH_DATE)) $criteria->add(AppCacheViewPeer::DEL_FINISH_DATE, $this->del_finish_date);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_THREAD_STATUS)) $criteria->add(AppCacheViewPeer::DEL_THREAD_STATUS, $this->del_thread_status);
		if ($this->isColumnModified(AppCacheViewPeer::APP_THREAD_STATUS)) $criteria->add(AppCacheViewPeer::APP_THREAD_STATUS, $this->app_thread_status);
		if ($this->isColumnModified(AppCacheViewPeer::APP_TITLE)) $criteria->add(AppCacheViewPeer::APP_TITLE, $this->app_title);
		if ($this->isColumnModified(AppCacheViewPeer::APP_PRO_TITLE)) $criteria->add(AppCacheViewPeer::APP_PRO_TITLE, $this->app_pro_title);
		if ($this->isColumnModified(AppCacheViewPeer::APP_TAS_TITLE)) $criteria->add(AppCacheViewPeer::APP_TAS_TITLE, $this->app_tas_title);
		if ($this->isColumnModified(AppCacheViewPeer::APP_CURRENT_USER)) $criteria->add(AppCacheViewPeer::APP_CURRENT_USER, $this->app_current_user);
		if ($this->isColumnModified(AppCacheViewPeer::APP_DEL_PREVIOUS_USER)) $criteria->add(AppCacheViewPeer::APP_DEL_PREVIOUS_USER, $this->app_del_previous_user);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_PRIORITY)) $criteria->add(AppCacheViewPeer::DEL_PRIORITY, $this->del_priority);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_DURATION)) $criteria->add(AppCacheViewPeer::DEL_DURATION, $this->del_duration);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_QUEUE_DURATION)) $criteria->add(AppCacheViewPeer::DEL_QUEUE_DURATION, $this->del_queue_duration);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_DELAY_DURATION)) $criteria->add(AppCacheViewPeer::DEL_DELAY_DURATION, $this->del_delay_duration);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_STARTED)) $criteria->add(AppCacheViewPeer::DEL_STARTED, $this->del_started);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_FINISHED)) $criteria->add(AppCacheViewPeer::DEL_FINISHED, $this->del_finished);
		if ($this->isColumnModified(AppCacheViewPeer::DEL_DELAYED)) $criteria->add(AppCacheViewPeer::DEL_DELAYED, $this->del_delayed);
		if ($this->isColumnModified(AppCacheViewPeer::APP_CREATE_DATE)) $criteria->add(AppCacheViewPeer::APP_CREATE_DATE, $this->app_create_date);
		if ($this->isColumnModified(AppCacheViewPeer::APP_FINISH_DATE)) $criteria->add(AppCacheViewPeer::APP_FINISH_DATE, $this->app_finish_date);
		if ($this->isColumnModified(AppCacheViewPeer::APP_UPDATE_DATE)) $criteria->add(AppCacheViewPeer::APP_UPDATE_DATE, $this->app_update_date);
		if ($this->isColumnModified(AppCacheViewPeer::APP_OVERDUE_PERCENTAGE)) $criteria->add(AppCacheViewPeer::APP_OVERDUE_PERCENTAGE, $this->app_overdue_percentage);

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
		$criteria = new Criteria(AppCacheViewPeer::DATABASE_NAME);
		$criteria->add(AppCacheViewPeer::APP_UID, $this->app_uid);
		$criteria->add(AppCacheViewPeer::DEL_INDEX, $this->del_index);

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
		$pks[0] = $this->getAppUid();
		$pks[1] = $this->getDelIndex();

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
		$this->setAppUid($keys[0]);
		$this->setDelIndex($keys[1]);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return (null === $this->getAppUid()) && (null === $this->getDelIndex());
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of AppCacheView (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAppUid($this->getAppUid());
		$copyObj->setDelIndex($this->getDelIndex());
		$copyObj->setAppNumber($this->getAppNumber());
		$copyObj->setAppStatus($this->getAppStatus());
		$copyObj->setUsrUid($this->getUsrUid());
		$copyObj->setPreviousUsrUid($this->getPreviousUsrUid());
		$copyObj->setTasUid($this->getTasUid());
		$copyObj->setProUid($this->getProUid());
		$copyObj->setDelDelegateDate($this->getDelDelegateDate());
		$copyObj->setDelInitDate($this->getDelInitDate());
		$copyObj->setDelTaskDueDate($this->getDelTaskDueDate());
		$copyObj->setDelFinishDate($this->getDelFinishDate());
		$copyObj->setDelThreadStatus($this->getDelThreadStatus());
		$copyObj->setAppThreadStatus($this->getAppThreadStatus());
		$copyObj->setAppTitle($this->getAppTitle());
		$copyObj->setAppProTitle($this->getAppProTitle());
		$copyObj->setAppTasTitle($this->getAppTasTitle());
		$copyObj->setAppCurrentUser($this->getAppCurrentUser());
		$copyObj->setAppDelPreviousUser($this->getAppDelPreviousUser());
		$copyObj->setDelPriority($this->getDelPriority());
		$copyObj->setDelDuration($this->getDelDuration());
		$copyObj->setDelQueueDuration($this->getDelQueueDuration());
		$copyObj->setDelDelayDuration($this->getDelDelayDuration());
		$copyObj->setDelStarted($this->getDelStarted());
		$copyObj->setDelFinished($this->getDelFinished());
		$copyObj->setDelDelayed($this->getDelDelayed());
		$copyObj->setAppCreateDate($this->getAppCreateDate());
		$copyObj->setAppFinishDate($this->getAppFinishDate());
		$copyObj->setAppUpdateDate($this->getAppUpdateDate());
		$copyObj->setAppOverduePercentage($this->getAppOverduePercentage());
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
	 * @return     AppCacheView Clone of current object.
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
	 * @return     AppCacheViewPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AppCacheViewPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->app_uid = null;
		$this->del_index = null;
		$this->app_number = null;
		$this->app_status = null;
		$this->usr_uid = null;
		$this->previous_usr_uid = null;
		$this->tas_uid = null;
		$this->pro_uid = null;
		$this->del_delegate_date = null;
		$this->del_init_date = null;
		$this->del_task_due_date = null;
		$this->del_finish_date = null;
		$this->del_thread_status = null;
		$this->app_thread_status = null;
		$this->app_title = null;
		$this->app_pro_title = null;
		$this->app_tas_title = null;
		$this->app_current_user = null;
		$this->app_del_previous_user = null;
		$this->del_priority = null;
		$this->del_duration = null;
		$this->del_queue_duration = null;
		$this->del_delay_duration = null;
		$this->del_started = null;
		$this->del_finished = null;
		$this->del_delayed = null;
		$this->app_create_date = null;
		$this->app_finish_date = null;
		$this->app_update_date = null;
		$this->app_overdue_percentage = null;
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
		return (string) $this->exportTo(AppCacheViewPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseAppCacheView
