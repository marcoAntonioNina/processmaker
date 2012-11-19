<?php


/**
 * Base class that represents a row from the 'PROCESS' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseProcess extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ProcessPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ProcessPeer
	 */
	protected static $peer;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the pro_parent field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $pro_parent;

	/**
	 * The value for the pro_time field.
	 * Note: this column has a database default value of: 1
	 * @var        double
	 */
	protected $pro_time;

	/**
	 * The value for the pro_timeunit field.
	 * Note: this column has a database default value of: 'DAYS'
	 * @var        string
	 */
	protected $pro_timeunit;

	/**
	 * The value for the pro_status field.
	 * Note: this column has a database default value of: 'ACTIVE'
	 * @var        string
	 */
	protected $pro_status;

	/**
	 * The value for the pro_type_day field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $pro_type_day;

	/**
	 * The value for the pro_type field.
	 * Note: this column has a database default value of: 'NORMAL'
	 * @var        string
	 */
	protected $pro_type;

	/**
	 * The value for the pro_assignment field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $pro_assignment;

	/**
	 * The value for the pro_show_map field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $pro_show_map;

	/**
	 * The value for the pro_show_message field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $pro_show_message;

	/**
	 * The value for the pro_subprocess field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $pro_subprocess;

	/**
	 * The value for the pro_tri_deleted field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_tri_deleted;

	/**
	 * The value for the pro_tri_canceled field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_tri_canceled;

	/**
	 * The value for the pro_tri_paused field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_tri_paused;

	/**
	 * The value for the pro_tri_reassigned field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_tri_reassigned;

	/**
	 * The value for the pro_show_delegate field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $pro_show_delegate;

	/**
	 * The value for the pro_show_dynaform field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $pro_show_dynaform;

	/**
	 * The value for the pro_category field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_category;

	/**
	 * The value for the pro_sub_category field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_sub_category;

	/**
	 * The value for the pro_industry field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $pro_industry;

	/**
	 * The value for the pro_update_date field.
	 * @var        string
	 */
	protected $pro_update_date;

	/**
	 * The value for the pro_create_date field.
	 * @var        string
	 */
	protected $pro_create_date;

	/**
	 * The value for the pro_create_user field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_create_user;

	/**
	 * The value for the pro_height field.
	 * Note: this column has a database default value of: 5000
	 * @var        int
	 */
	protected $pro_height;

	/**
	 * The value for the pro_width field.
	 * Note: this column has a database default value of: 10000
	 * @var        int
	 */
	protected $pro_width;

	/**
	 * The value for the pro_title_x field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $pro_title_x;

	/**
	 * The value for the pro_title_y field.
	 * Note: this column has a database default value of: 6
	 * @var        int
	 */
	protected $pro_title_y;

	/**
	 * The value for the pro_debug field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $pro_debug;

	/**
	 * The value for the pro_dynaforms field.
	 * @var        string
	 */
	protected $pro_dynaforms;

	/**
	 * The value for the pro_derivation_screen_tpl field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_derivation_screen_tpl;

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
		$this->pro_parent = '0';
		$this->pro_time = 1;
		$this->pro_timeunit = 'DAYS';
		$this->pro_status = 'ACTIVE';
		$this->pro_type_day = '0';
		$this->pro_type = 'NORMAL';
		$this->pro_assignment = 'FALSE';
		$this->pro_show_map = 1;
		$this->pro_show_message = 1;
		$this->pro_subprocess = 0;
		$this->pro_tri_deleted = '';
		$this->pro_tri_canceled = '';
		$this->pro_tri_paused = '';
		$this->pro_tri_reassigned = '';
		$this->pro_show_delegate = 1;
		$this->pro_show_dynaform = 0;
		$this->pro_category = '';
		$this->pro_sub_category = '';
		$this->pro_industry = 1;
		$this->pro_create_user = '';
		$this->pro_height = 5000;
		$this->pro_width = 10000;
		$this->pro_title_x = 0;
		$this->pro_title_y = 6;
		$this->pro_debug = 0;
		$this->pro_derivation_screen_tpl = '';
	}

	/**
	 * Initializes internal state of BaseProcess object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [pro_parent] column value.
	 * 
	 * @return     string
	 */
	public function getProParent()
	{
		return $this->pro_parent;
	}

	/**
	 * Get the [pro_time] column value.
	 * 
	 * @return     double
	 */
	public function getProTime()
	{
		return $this->pro_time;
	}

	/**
	 * Get the [pro_timeunit] column value.
	 * 
	 * @return     string
	 */
	public function getProTimeunit()
	{
		return $this->pro_timeunit;
	}

	/**
	 * Get the [pro_status] column value.
	 * 
	 * @return     string
	 */
	public function getProStatus()
	{
		return $this->pro_status;
	}

	/**
	 * Get the [pro_type_day] column value.
	 * 
	 * @return     string
	 */
	public function getProTypeDay()
	{
		return $this->pro_type_day;
	}

	/**
	 * Get the [pro_type] column value.
	 * 
	 * @return     string
	 */
	public function getProType()
	{
		return $this->pro_type;
	}

	/**
	 * Get the [pro_assignment] column value.
	 * 
	 * @return     string
	 */
	public function getProAssignment()
	{
		return $this->pro_assignment;
	}

	/**
	 * Get the [pro_show_map] column value.
	 * 
	 * @return     int
	 */
	public function getProShowMap()
	{
		return $this->pro_show_map;
	}

	/**
	 * Get the [pro_show_message] column value.
	 * 
	 * @return     int
	 */
	public function getProShowMessage()
	{
		return $this->pro_show_message;
	}

	/**
	 * Get the [pro_subprocess] column value.
	 * 
	 * @return     int
	 */
	public function getProSubprocess()
	{
		return $this->pro_subprocess;
	}

	/**
	 * Get the [pro_tri_deleted] column value.
	 * 
	 * @return     string
	 */
	public function getProTriDeleted()
	{
		return $this->pro_tri_deleted;
	}

	/**
	 * Get the [pro_tri_canceled] column value.
	 * 
	 * @return     string
	 */
	public function getProTriCanceled()
	{
		return $this->pro_tri_canceled;
	}

	/**
	 * Get the [pro_tri_paused] column value.
	 * 
	 * @return     string
	 */
	public function getProTriPaused()
	{
		return $this->pro_tri_paused;
	}

	/**
	 * Get the [pro_tri_reassigned] column value.
	 * 
	 * @return     string
	 */
	public function getProTriReassigned()
	{
		return $this->pro_tri_reassigned;
	}

	/**
	 * Get the [pro_show_delegate] column value.
	 * 
	 * @return     int
	 */
	public function getProShowDelegate()
	{
		return $this->pro_show_delegate;
	}

	/**
	 * Get the [pro_show_dynaform] column value.
	 * 
	 * @return     int
	 */
	public function getProShowDynaform()
	{
		return $this->pro_show_dynaform;
	}

	/**
	 * Get the [pro_category] column value.
	 * 
	 * @return     string
	 */
	public function getProCategory()
	{
		return $this->pro_category;
	}

	/**
	 * Get the [pro_sub_category] column value.
	 * 
	 * @return     string
	 */
	public function getProSubCategory()
	{
		return $this->pro_sub_category;
	}

	/**
	 * Get the [pro_industry] column value.
	 * 
	 * @return     int
	 */
	public function getProIndustry()
	{
		return $this->pro_industry;
	}

	/**
	 * Get the [optionally formatted] temporal [pro_update_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getProUpdateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->pro_update_date === null) {
			return null;
		}


		if ($this->pro_update_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->pro_update_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pro_update_date, true), $x);
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
	 * Get the [optionally formatted] temporal [pro_create_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getProCreateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->pro_create_date === null) {
			return null;
		}


		if ($this->pro_create_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->pro_create_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pro_create_date, true), $x);
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
	 * Get the [pro_create_user] column value.
	 * 
	 * @return     string
	 */
	public function getProCreateUser()
	{
		return $this->pro_create_user;
	}

	/**
	 * Get the [pro_height] column value.
	 * 
	 * @return     int
	 */
	public function getProHeight()
	{
		return $this->pro_height;
	}

	/**
	 * Get the [pro_width] column value.
	 * 
	 * @return     int
	 */
	public function getProWidth()
	{
		return $this->pro_width;
	}

	/**
	 * Get the [pro_title_x] column value.
	 * 
	 * @return     int
	 */
	public function getProTitleX()
	{
		return $this->pro_title_x;
	}

	/**
	 * Get the [pro_title_y] column value.
	 * 
	 * @return     int
	 */
	public function getProTitleY()
	{
		return $this->pro_title_y;
	}

	/**
	 * Get the [pro_debug] column value.
	 * 
	 * @return     int
	 */
	public function getProDebug()
	{
		return $this->pro_debug;
	}

	/**
	 * Get the [pro_dynaforms] column value.
	 * 
	 * @return     string
	 */
	public function getProDynaforms()
	{
		return $this->pro_dynaforms;
	}

	/**
	 * Get the [pro_derivation_screen_tpl] column value.
	 * 
	 * @return     string
	 */
	public function getProDerivationScreenTpl()
	{
		return $this->pro_derivation_screen_tpl;
	}

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [pro_parent] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProParent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_parent !== $v) {
			$this->pro_parent = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_PARENT;
		}

		return $this;
	} // setProParent()

	/**
	 * Set the value of [pro_time] column.
	 * 
	 * @param      double $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProTime($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->pro_time !== $v) {
			$this->pro_time = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TIME;
		}

		return $this;
	} // setProTime()

	/**
	 * Set the value of [pro_timeunit] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProTimeunit($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_timeunit !== $v) {
			$this->pro_timeunit = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TIMEUNIT;
		}

		return $this;
	} // setProTimeunit()

	/**
	 * Set the value of [pro_status] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_status !== $v) {
			$this->pro_status = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_STATUS;
		}

		return $this;
	} // setProStatus()

	/**
	 * Set the value of [pro_type_day] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProTypeDay($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_type_day !== $v) {
			$this->pro_type_day = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TYPE_DAY;
		}

		return $this;
	} // setProTypeDay()

	/**
	 * Set the value of [pro_type] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_type !== $v) {
			$this->pro_type = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TYPE;
		}

		return $this;
	} // setProType()

	/**
	 * Set the value of [pro_assignment] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProAssignment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_assignment !== $v) {
			$this->pro_assignment = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_ASSIGNMENT;
		}

		return $this;
	} // setProAssignment()

	/**
	 * Set the value of [pro_show_map] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProShowMap($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_show_map !== $v) {
			$this->pro_show_map = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_SHOW_MAP;
		}

		return $this;
	} // setProShowMap()

	/**
	 * Set the value of [pro_show_message] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProShowMessage($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_show_message !== $v) {
			$this->pro_show_message = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_SHOW_MESSAGE;
		}

		return $this;
	} // setProShowMessage()

	/**
	 * Set the value of [pro_subprocess] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProSubprocess($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_subprocess !== $v) {
			$this->pro_subprocess = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_SUBPROCESS;
		}

		return $this;
	} // setProSubprocess()

	/**
	 * Set the value of [pro_tri_deleted] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProTriDeleted($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_tri_deleted !== $v) {
			$this->pro_tri_deleted = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TRI_DELETED;
		}

		return $this;
	} // setProTriDeleted()

	/**
	 * Set the value of [pro_tri_canceled] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProTriCanceled($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_tri_canceled !== $v) {
			$this->pro_tri_canceled = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TRI_CANCELED;
		}

		return $this;
	} // setProTriCanceled()

	/**
	 * Set the value of [pro_tri_paused] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProTriPaused($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_tri_paused !== $v) {
			$this->pro_tri_paused = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TRI_PAUSED;
		}

		return $this;
	} // setProTriPaused()

	/**
	 * Set the value of [pro_tri_reassigned] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProTriReassigned($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_tri_reassigned !== $v) {
			$this->pro_tri_reassigned = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TRI_REASSIGNED;
		}

		return $this;
	} // setProTriReassigned()

	/**
	 * Set the value of [pro_show_delegate] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProShowDelegate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_show_delegate !== $v) {
			$this->pro_show_delegate = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_SHOW_DELEGATE;
		}

		return $this;
	} // setProShowDelegate()

	/**
	 * Set the value of [pro_show_dynaform] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProShowDynaform($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_show_dynaform !== $v) {
			$this->pro_show_dynaform = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_SHOW_DYNAFORM;
		}

		return $this;
	} // setProShowDynaform()

	/**
	 * Set the value of [pro_category] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProCategory($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_category !== $v) {
			$this->pro_category = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_CATEGORY;
		}

		return $this;
	} // setProCategory()

	/**
	 * Set the value of [pro_sub_category] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProSubCategory($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_sub_category !== $v) {
			$this->pro_sub_category = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_SUB_CATEGORY;
		}

		return $this;
	} // setProSubCategory()

	/**
	 * Set the value of [pro_industry] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProIndustry($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_industry !== $v) {
			$this->pro_industry = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_INDUSTRY;
		}

		return $this;
	} // setProIndustry()

	/**
	 * Sets the value of [pro_update_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProUpdateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->pro_update_date !== null || $dt !== null) {
			$currentDateAsString = ($this->pro_update_date !== null && $tmpDt = new DateTime($this->pro_update_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->pro_update_date = $newDateAsString;
				$this->modifiedColumns[] = ProcessPeer::PRO_UPDATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setProUpdateDate()

	/**
	 * Sets the value of [pro_create_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProCreateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->pro_create_date !== null || $dt !== null) {
			$currentDateAsString = ($this->pro_create_date !== null && $tmpDt = new DateTime($this->pro_create_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->pro_create_date = $newDateAsString;
				$this->modifiedColumns[] = ProcessPeer::PRO_CREATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setProCreateDate()

	/**
	 * Set the value of [pro_create_user] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProCreateUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_create_user !== $v) {
			$this->pro_create_user = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_CREATE_USER;
		}

		return $this;
	} // setProCreateUser()

	/**
	 * Set the value of [pro_height] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProHeight($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_height !== $v) {
			$this->pro_height = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_HEIGHT;
		}

		return $this;
	} // setProHeight()

	/**
	 * Set the value of [pro_width] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProWidth($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_width !== $v) {
			$this->pro_width = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_WIDTH;
		}

		return $this;
	} // setProWidth()

	/**
	 * Set the value of [pro_title_x] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProTitleX($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_title_x !== $v) {
			$this->pro_title_x = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TITLE_X;
		}

		return $this;
	} // setProTitleX()

	/**
	 * Set the value of [pro_title_y] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProTitleY($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_title_y !== $v) {
			$this->pro_title_y = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_TITLE_Y;
		}

		return $this;
	} // setProTitleY()

	/**
	 * Set the value of [pro_debug] column.
	 * 
	 * @param      int $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProDebug($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->pro_debug !== $v) {
			$this->pro_debug = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_DEBUG;
		}

		return $this;
	} // setProDebug()

	/**
	 * Set the value of [pro_dynaforms] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProDynaforms($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_dynaforms !== $v) {
			$this->pro_dynaforms = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_DYNAFORMS;
		}

		return $this;
	} // setProDynaforms()

	/**
	 * Set the value of [pro_derivation_screen_tpl] column.
	 * 
	 * @param      string $v new value
	 * @return     Process The current object (for fluent API support)
	 */
	public function setProDerivationScreenTpl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_derivation_screen_tpl !== $v) {
			$this->pro_derivation_screen_tpl = $v;
			$this->modifiedColumns[] = ProcessPeer::PRO_DERIVATION_SCREEN_TPL;
		}

		return $this;
	} // setProDerivationScreenTpl()

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

			if ($this->pro_parent !== '0') {
				return false;
			}

			if ($this->pro_time !== 1) {
				return false;
			}

			if ($this->pro_timeunit !== 'DAYS') {
				return false;
			}

			if ($this->pro_status !== 'ACTIVE') {
				return false;
			}

			if ($this->pro_type_day !== '0') {
				return false;
			}

			if ($this->pro_type !== 'NORMAL') {
				return false;
			}

			if ($this->pro_assignment !== 'FALSE') {
				return false;
			}

			if ($this->pro_show_map !== 1) {
				return false;
			}

			if ($this->pro_show_message !== 1) {
				return false;
			}

			if ($this->pro_subprocess !== 0) {
				return false;
			}

			if ($this->pro_tri_deleted !== '') {
				return false;
			}

			if ($this->pro_tri_canceled !== '') {
				return false;
			}

			if ($this->pro_tri_paused !== '') {
				return false;
			}

			if ($this->pro_tri_reassigned !== '') {
				return false;
			}

			if ($this->pro_show_delegate !== 1) {
				return false;
			}

			if ($this->pro_show_dynaform !== 0) {
				return false;
			}

			if ($this->pro_category !== '') {
				return false;
			}

			if ($this->pro_sub_category !== '') {
				return false;
			}

			if ($this->pro_industry !== 1) {
				return false;
			}

			if ($this->pro_create_user !== '') {
				return false;
			}

			if ($this->pro_height !== 5000) {
				return false;
			}

			if ($this->pro_width !== 10000) {
				return false;
			}

			if ($this->pro_title_x !== 0) {
				return false;
			}

			if ($this->pro_title_y !== 6) {
				return false;
			}

			if ($this->pro_debug !== 0) {
				return false;
			}

			if ($this->pro_derivation_screen_tpl !== '') {
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

			$this->pro_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->pro_parent = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->pro_time = ($row[$startcol + 2] !== null) ? (double) $row[$startcol + 2] : null;
			$this->pro_timeunit = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->pro_status = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->pro_type_day = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->pro_type = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->pro_assignment = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->pro_show_map = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->pro_show_message = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->pro_subprocess = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->pro_tri_deleted = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->pro_tri_canceled = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->pro_tri_paused = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->pro_tri_reassigned = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->pro_show_delegate = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->pro_show_dynaform = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->pro_category = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->pro_sub_category = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->pro_industry = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->pro_update_date = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->pro_create_date = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->pro_create_user = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->pro_height = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->pro_width = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->pro_title_x = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->pro_title_y = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
			$this->pro_debug = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
			$this->pro_dynaforms = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
			$this->pro_derivation_screen_tpl = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 30; // 30 = ProcessPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Process object", $e);
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
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ProcessPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = ProcessQuery::create()
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
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ProcessPeer::addInstanceToPool($this);
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
					$affectedRows = ProcessPeer::doUpdate($this, $con);
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


			if (($retval = ProcessPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ProcessPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getProUid();
				break;
			case 1:
				return $this->getProParent();
				break;
			case 2:
				return $this->getProTime();
				break;
			case 3:
				return $this->getProTimeunit();
				break;
			case 4:
				return $this->getProStatus();
				break;
			case 5:
				return $this->getProTypeDay();
				break;
			case 6:
				return $this->getProType();
				break;
			case 7:
				return $this->getProAssignment();
				break;
			case 8:
				return $this->getProShowMap();
				break;
			case 9:
				return $this->getProShowMessage();
				break;
			case 10:
				return $this->getProSubprocess();
				break;
			case 11:
				return $this->getProTriDeleted();
				break;
			case 12:
				return $this->getProTriCanceled();
				break;
			case 13:
				return $this->getProTriPaused();
				break;
			case 14:
				return $this->getProTriReassigned();
				break;
			case 15:
				return $this->getProShowDelegate();
				break;
			case 16:
				return $this->getProShowDynaform();
				break;
			case 17:
				return $this->getProCategory();
				break;
			case 18:
				return $this->getProSubCategory();
				break;
			case 19:
				return $this->getProIndustry();
				break;
			case 20:
				return $this->getProUpdateDate();
				break;
			case 21:
				return $this->getProCreateDate();
				break;
			case 22:
				return $this->getProCreateUser();
				break;
			case 23:
				return $this->getProHeight();
				break;
			case 24:
				return $this->getProWidth();
				break;
			case 25:
				return $this->getProTitleX();
				break;
			case 26:
				return $this->getProTitleY();
				break;
			case 27:
				return $this->getProDebug();
				break;
			case 28:
				return $this->getProDynaforms();
				break;
			case 29:
				return $this->getProDerivationScreenTpl();
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
		if (isset($alreadyDumpedObjects['Process'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Process'][$this->getPrimaryKey()] = true;
		$keys = ProcessPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getProUid(),
			$keys[1] => $this->getProParent(),
			$keys[2] => $this->getProTime(),
			$keys[3] => $this->getProTimeunit(),
			$keys[4] => $this->getProStatus(),
			$keys[5] => $this->getProTypeDay(),
			$keys[6] => $this->getProType(),
			$keys[7] => $this->getProAssignment(),
			$keys[8] => $this->getProShowMap(),
			$keys[9] => $this->getProShowMessage(),
			$keys[10] => $this->getProSubprocess(),
			$keys[11] => $this->getProTriDeleted(),
			$keys[12] => $this->getProTriCanceled(),
			$keys[13] => $this->getProTriPaused(),
			$keys[14] => $this->getProTriReassigned(),
			$keys[15] => $this->getProShowDelegate(),
			$keys[16] => $this->getProShowDynaform(),
			$keys[17] => $this->getProCategory(),
			$keys[18] => $this->getProSubCategory(),
			$keys[19] => $this->getProIndustry(),
			$keys[20] => $this->getProUpdateDate(),
			$keys[21] => $this->getProCreateDate(),
			$keys[22] => $this->getProCreateUser(),
			$keys[23] => $this->getProHeight(),
			$keys[24] => $this->getProWidth(),
			$keys[25] => $this->getProTitleX(),
			$keys[26] => $this->getProTitleY(),
			$keys[27] => $this->getProDebug(),
			$keys[28] => $this->getProDynaforms(),
			$keys[29] => $this->getProDerivationScreenTpl(),
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
		$pos = ProcessPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setProUid($value);
				break;
			case 1:
				$this->setProParent($value);
				break;
			case 2:
				$this->setProTime($value);
				break;
			case 3:
				$this->setProTimeunit($value);
				break;
			case 4:
				$this->setProStatus($value);
				break;
			case 5:
				$this->setProTypeDay($value);
				break;
			case 6:
				$this->setProType($value);
				break;
			case 7:
				$this->setProAssignment($value);
				break;
			case 8:
				$this->setProShowMap($value);
				break;
			case 9:
				$this->setProShowMessage($value);
				break;
			case 10:
				$this->setProSubprocess($value);
				break;
			case 11:
				$this->setProTriDeleted($value);
				break;
			case 12:
				$this->setProTriCanceled($value);
				break;
			case 13:
				$this->setProTriPaused($value);
				break;
			case 14:
				$this->setProTriReassigned($value);
				break;
			case 15:
				$this->setProShowDelegate($value);
				break;
			case 16:
				$this->setProShowDynaform($value);
				break;
			case 17:
				$this->setProCategory($value);
				break;
			case 18:
				$this->setProSubCategory($value);
				break;
			case 19:
				$this->setProIndustry($value);
				break;
			case 20:
				$this->setProUpdateDate($value);
				break;
			case 21:
				$this->setProCreateDate($value);
				break;
			case 22:
				$this->setProCreateUser($value);
				break;
			case 23:
				$this->setProHeight($value);
				break;
			case 24:
				$this->setProWidth($value);
				break;
			case 25:
				$this->setProTitleX($value);
				break;
			case 26:
				$this->setProTitleY($value);
				break;
			case 27:
				$this->setProDebug($value);
				break;
			case 28:
				$this->setProDynaforms($value);
				break;
			case 29:
				$this->setProDerivationScreenTpl($value);
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
		$keys = ProcessPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setProUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProParent($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProTime($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setProTimeunit($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setProStatus($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setProTypeDay($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setProType($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setProAssignment($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setProShowMap($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setProShowMessage($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setProSubprocess($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setProTriDeleted($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setProTriCanceled($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setProTriPaused($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setProTriReassigned($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setProShowDelegate($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setProShowDynaform($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setProCategory($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setProSubCategory($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setProIndustry($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setProUpdateDate($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setProCreateDate($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setProCreateUser($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setProHeight($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setProWidth($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setProTitleX($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setProTitleY($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setProDebug($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setProDynaforms($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setProDerivationScreenTpl($arr[$keys[29]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ProcessPeer::DATABASE_NAME);

		if ($this->isColumnModified(ProcessPeer::PRO_UID)) $criteria->add(ProcessPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(ProcessPeer::PRO_PARENT)) $criteria->add(ProcessPeer::PRO_PARENT, $this->pro_parent);
		if ($this->isColumnModified(ProcessPeer::PRO_TIME)) $criteria->add(ProcessPeer::PRO_TIME, $this->pro_time);
		if ($this->isColumnModified(ProcessPeer::PRO_TIMEUNIT)) $criteria->add(ProcessPeer::PRO_TIMEUNIT, $this->pro_timeunit);
		if ($this->isColumnModified(ProcessPeer::PRO_STATUS)) $criteria->add(ProcessPeer::PRO_STATUS, $this->pro_status);
		if ($this->isColumnModified(ProcessPeer::PRO_TYPE_DAY)) $criteria->add(ProcessPeer::PRO_TYPE_DAY, $this->pro_type_day);
		if ($this->isColumnModified(ProcessPeer::PRO_TYPE)) $criteria->add(ProcessPeer::PRO_TYPE, $this->pro_type);
		if ($this->isColumnModified(ProcessPeer::PRO_ASSIGNMENT)) $criteria->add(ProcessPeer::PRO_ASSIGNMENT, $this->pro_assignment);
		if ($this->isColumnModified(ProcessPeer::PRO_SHOW_MAP)) $criteria->add(ProcessPeer::PRO_SHOW_MAP, $this->pro_show_map);
		if ($this->isColumnModified(ProcessPeer::PRO_SHOW_MESSAGE)) $criteria->add(ProcessPeer::PRO_SHOW_MESSAGE, $this->pro_show_message);
		if ($this->isColumnModified(ProcessPeer::PRO_SUBPROCESS)) $criteria->add(ProcessPeer::PRO_SUBPROCESS, $this->pro_subprocess);
		if ($this->isColumnModified(ProcessPeer::PRO_TRI_DELETED)) $criteria->add(ProcessPeer::PRO_TRI_DELETED, $this->pro_tri_deleted);
		if ($this->isColumnModified(ProcessPeer::PRO_TRI_CANCELED)) $criteria->add(ProcessPeer::PRO_TRI_CANCELED, $this->pro_tri_canceled);
		if ($this->isColumnModified(ProcessPeer::PRO_TRI_PAUSED)) $criteria->add(ProcessPeer::PRO_TRI_PAUSED, $this->pro_tri_paused);
		if ($this->isColumnModified(ProcessPeer::PRO_TRI_REASSIGNED)) $criteria->add(ProcessPeer::PRO_TRI_REASSIGNED, $this->pro_tri_reassigned);
		if ($this->isColumnModified(ProcessPeer::PRO_SHOW_DELEGATE)) $criteria->add(ProcessPeer::PRO_SHOW_DELEGATE, $this->pro_show_delegate);
		if ($this->isColumnModified(ProcessPeer::PRO_SHOW_DYNAFORM)) $criteria->add(ProcessPeer::PRO_SHOW_DYNAFORM, $this->pro_show_dynaform);
		if ($this->isColumnModified(ProcessPeer::PRO_CATEGORY)) $criteria->add(ProcessPeer::PRO_CATEGORY, $this->pro_category);
		if ($this->isColumnModified(ProcessPeer::PRO_SUB_CATEGORY)) $criteria->add(ProcessPeer::PRO_SUB_CATEGORY, $this->pro_sub_category);
		if ($this->isColumnModified(ProcessPeer::PRO_INDUSTRY)) $criteria->add(ProcessPeer::PRO_INDUSTRY, $this->pro_industry);
		if ($this->isColumnModified(ProcessPeer::PRO_UPDATE_DATE)) $criteria->add(ProcessPeer::PRO_UPDATE_DATE, $this->pro_update_date);
		if ($this->isColumnModified(ProcessPeer::PRO_CREATE_DATE)) $criteria->add(ProcessPeer::PRO_CREATE_DATE, $this->pro_create_date);
		if ($this->isColumnModified(ProcessPeer::PRO_CREATE_USER)) $criteria->add(ProcessPeer::PRO_CREATE_USER, $this->pro_create_user);
		if ($this->isColumnModified(ProcessPeer::PRO_HEIGHT)) $criteria->add(ProcessPeer::PRO_HEIGHT, $this->pro_height);
		if ($this->isColumnModified(ProcessPeer::PRO_WIDTH)) $criteria->add(ProcessPeer::PRO_WIDTH, $this->pro_width);
		if ($this->isColumnModified(ProcessPeer::PRO_TITLE_X)) $criteria->add(ProcessPeer::PRO_TITLE_X, $this->pro_title_x);
		if ($this->isColumnModified(ProcessPeer::PRO_TITLE_Y)) $criteria->add(ProcessPeer::PRO_TITLE_Y, $this->pro_title_y);
		if ($this->isColumnModified(ProcessPeer::PRO_DEBUG)) $criteria->add(ProcessPeer::PRO_DEBUG, $this->pro_debug);
		if ($this->isColumnModified(ProcessPeer::PRO_DYNAFORMS)) $criteria->add(ProcessPeer::PRO_DYNAFORMS, $this->pro_dynaforms);
		if ($this->isColumnModified(ProcessPeer::PRO_DERIVATION_SCREEN_TPL)) $criteria->add(ProcessPeer::PRO_DERIVATION_SCREEN_TPL, $this->pro_derivation_screen_tpl);

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
		$criteria = new Criteria(ProcessPeer::DATABASE_NAME);
		$criteria->add(ProcessPeer::PRO_UID, $this->pro_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getProUid();
	}

	/**
	 * Generic method to set the primary key (pro_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setProUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getProUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Process (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setProUid($this->getProUid());
		$copyObj->setProParent($this->getProParent());
		$copyObj->setProTime($this->getProTime());
		$copyObj->setProTimeunit($this->getProTimeunit());
		$copyObj->setProStatus($this->getProStatus());
		$copyObj->setProTypeDay($this->getProTypeDay());
		$copyObj->setProType($this->getProType());
		$copyObj->setProAssignment($this->getProAssignment());
		$copyObj->setProShowMap($this->getProShowMap());
		$copyObj->setProShowMessage($this->getProShowMessage());
		$copyObj->setProSubprocess($this->getProSubprocess());
		$copyObj->setProTriDeleted($this->getProTriDeleted());
		$copyObj->setProTriCanceled($this->getProTriCanceled());
		$copyObj->setProTriPaused($this->getProTriPaused());
		$copyObj->setProTriReassigned($this->getProTriReassigned());
		$copyObj->setProShowDelegate($this->getProShowDelegate());
		$copyObj->setProShowDynaform($this->getProShowDynaform());
		$copyObj->setProCategory($this->getProCategory());
		$copyObj->setProSubCategory($this->getProSubCategory());
		$copyObj->setProIndustry($this->getProIndustry());
		$copyObj->setProUpdateDate($this->getProUpdateDate());
		$copyObj->setProCreateDate($this->getProCreateDate());
		$copyObj->setProCreateUser($this->getProCreateUser());
		$copyObj->setProHeight($this->getProHeight());
		$copyObj->setProWidth($this->getProWidth());
		$copyObj->setProTitleX($this->getProTitleX());
		$copyObj->setProTitleY($this->getProTitleY());
		$copyObj->setProDebug($this->getProDebug());
		$copyObj->setProDynaforms($this->getProDynaforms());
		$copyObj->setProDerivationScreenTpl($this->getProDerivationScreenTpl());
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
	 * @return     Process Clone of current object.
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
	 * @return     ProcessPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ProcessPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->pro_uid = null;
		$this->pro_parent = null;
		$this->pro_time = null;
		$this->pro_timeunit = null;
		$this->pro_status = null;
		$this->pro_type_day = null;
		$this->pro_type = null;
		$this->pro_assignment = null;
		$this->pro_show_map = null;
		$this->pro_show_message = null;
		$this->pro_subprocess = null;
		$this->pro_tri_deleted = null;
		$this->pro_tri_canceled = null;
		$this->pro_tri_paused = null;
		$this->pro_tri_reassigned = null;
		$this->pro_show_delegate = null;
		$this->pro_show_dynaform = null;
		$this->pro_category = null;
		$this->pro_sub_category = null;
		$this->pro_industry = null;
		$this->pro_update_date = null;
		$this->pro_create_date = null;
		$this->pro_create_user = null;
		$this->pro_height = null;
		$this->pro_width = null;
		$this->pro_title_x = null;
		$this->pro_title_y = null;
		$this->pro_debug = null;
		$this->pro_dynaforms = null;
		$this->pro_derivation_screen_tpl = null;
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
		return (string) $this->exportTo(ProcessPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseProcess
