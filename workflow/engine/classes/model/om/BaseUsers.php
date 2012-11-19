<?php


/**
 * Base class that represents a row from the 'USERS' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseUsers extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'UsersPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        UsersPeer
	 */
	protected static $peer;

	/**
	 * The value for the usr_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_uid;

	/**
	 * The value for the usr_username field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_username;

	/**
	 * The value for the usr_password field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_password;

	/**
	 * The value for the usr_firstname field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_firstname;

	/**
	 * The value for the usr_lastname field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_lastname;

	/**
	 * The value for the usr_email field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_email;

	/**
	 * The value for the usr_due_date field.
	 * @var        string
	 */
	protected $usr_due_date;

	/**
	 * The value for the usr_create_date field.
	 * @var        string
	 */
	protected $usr_create_date;

	/**
	 * The value for the usr_update_date field.
	 * @var        string
	 */
	protected $usr_update_date;

	/**
	 * The value for the usr_status field.
	 * Note: this column has a database default value of: 'ACTIVE'
	 * @var        string
	 */
	protected $usr_status;

	/**
	 * The value for the usr_country field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_country;

	/**
	 * The value for the usr_city field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_city;

	/**
	 * The value for the usr_location field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_location;

	/**
	 * The value for the usr_address field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_address;

	/**
	 * The value for the usr_phone field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_phone;

	/**
	 * The value for the usr_fax field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_fax;

	/**
	 * The value for the usr_cellular field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_cellular;

	/**
	 * The value for the usr_zip_code field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_zip_code;

	/**
	 * The value for the dep_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $dep_uid;

	/**
	 * The value for the usr_position field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_position;

	/**
	 * The value for the usr_resume field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_resume;

	/**
	 * The value for the usr_birthday field.
	 * @var        string
	 */
	protected $usr_birthday;

	/**
	 * The value for the usr_role field.
	 * Note: this column has a database default value of: 'PROCESSMAKER_ADMIN'
	 * @var        string
	 */
	protected $usr_role;

	/**
	 * The value for the usr_reports_to field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_reports_to;

	/**
	 * The value for the usr_replaced_by field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_replaced_by;

	/**
	 * The value for the usr_ux field.
	 * Note: this column has a database default value of: 'NORMAL'
	 * @var        string
	 */
	protected $usr_ux;

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
		$this->usr_uid = '';
		$this->usr_username = '';
		$this->usr_password = '';
		$this->usr_firstname = '';
		$this->usr_lastname = '';
		$this->usr_email = '';
		$this->usr_status = 'ACTIVE';
		$this->usr_country = '';
		$this->usr_city = '';
		$this->usr_location = '';
		$this->usr_address = '';
		$this->usr_phone = '';
		$this->usr_fax = '';
		$this->usr_cellular = '';
		$this->usr_zip_code = '';
		$this->dep_uid = '';
		$this->usr_position = '';
		$this->usr_resume = '';
		$this->usr_role = 'PROCESSMAKER_ADMIN';
		$this->usr_reports_to = '';
		$this->usr_replaced_by = '';
		$this->usr_ux = 'NORMAL';
	}

	/**
	 * Initializes internal state of BaseUsers object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [usr_username] column value.
	 * 
	 * @return     string
	 */
	public function getUsrUsername()
	{
		return $this->usr_username;
	}

	/**
	 * Get the [usr_password] column value.
	 * 
	 * @return     string
	 */
	public function getUsrPassword()
	{
		return $this->usr_password;
	}

	/**
	 * Get the [usr_firstname] column value.
	 * 
	 * @return     string
	 */
	public function getUsrFirstname()
	{
		return $this->usr_firstname;
	}

	/**
	 * Get the [usr_lastname] column value.
	 * 
	 * @return     string
	 */
	public function getUsrLastname()
	{
		return $this->usr_lastname;
	}

	/**
	 * Get the [usr_email] column value.
	 * 
	 * @return     string
	 */
	public function getUsrEmail()
	{
		return $this->usr_email;
	}

	/**
	 * Get the [optionally formatted] temporal [usr_due_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUsrDueDate($format = '%x')
	{
		if ($this->usr_due_date === null) {
			return null;
		}


		if ($this->usr_due_date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->usr_due_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->usr_due_date, true), $x);
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
	 * Get the [optionally formatted] temporal [usr_create_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUsrCreateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->usr_create_date === null) {
			return null;
		}


		if ($this->usr_create_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->usr_create_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->usr_create_date, true), $x);
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
	 * Get the [optionally formatted] temporal [usr_update_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUsrUpdateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->usr_update_date === null) {
			return null;
		}


		if ($this->usr_update_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->usr_update_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->usr_update_date, true), $x);
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
	 * Get the [usr_status] column value.
	 * 
	 * @return     string
	 */
	public function getUsrStatus()
	{
		return $this->usr_status;
	}

	/**
	 * Get the [usr_country] column value.
	 * 
	 * @return     string
	 */
	public function getUsrCountry()
	{
		return $this->usr_country;
	}

	/**
	 * Get the [usr_city] column value.
	 * 
	 * @return     string
	 */
	public function getUsrCity()
	{
		return $this->usr_city;
	}

	/**
	 * Get the [usr_location] column value.
	 * 
	 * @return     string
	 */
	public function getUsrLocation()
	{
		return $this->usr_location;
	}

	/**
	 * Get the [usr_address] column value.
	 * 
	 * @return     string
	 */
	public function getUsrAddress()
	{
		return $this->usr_address;
	}

	/**
	 * Get the [usr_phone] column value.
	 * 
	 * @return     string
	 */
	public function getUsrPhone()
	{
		return $this->usr_phone;
	}

	/**
	 * Get the [usr_fax] column value.
	 * 
	 * @return     string
	 */
	public function getUsrFax()
	{
		return $this->usr_fax;
	}

	/**
	 * Get the [usr_cellular] column value.
	 * 
	 * @return     string
	 */
	public function getUsrCellular()
	{
		return $this->usr_cellular;
	}

	/**
	 * Get the [usr_zip_code] column value.
	 * 
	 * @return     string
	 */
	public function getUsrZipCode()
	{
		return $this->usr_zip_code;
	}

	/**
	 * Get the [dep_uid] column value.
	 * 
	 * @return     string
	 */
	public function getDepUid()
	{
		return $this->dep_uid;
	}

	/**
	 * Get the [usr_position] column value.
	 * 
	 * @return     string
	 */
	public function getUsrPosition()
	{
		return $this->usr_position;
	}

	/**
	 * Get the [usr_resume] column value.
	 * 
	 * @return     string
	 */
	public function getUsrResume()
	{
		return $this->usr_resume;
	}

	/**
	 * Get the [optionally formatted] temporal [usr_birthday] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUsrBirthday($format = '%x')
	{
		if ($this->usr_birthday === null) {
			return null;
		}


		if ($this->usr_birthday === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->usr_birthday);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->usr_birthday, true), $x);
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
	 * Get the [usr_role] column value.
	 * 
	 * @return     string
	 */
	public function getUsrRole()
	{
		return $this->usr_role;
	}

	/**
	 * Get the [usr_reports_to] column value.
	 * 
	 * @return     string
	 */
	public function getUsrReportsTo()
	{
		return $this->usr_reports_to;
	}

	/**
	 * Get the [usr_replaced_by] column value.
	 * 
	 * @return     string
	 */
	public function getUsrReplacedBy()
	{
		return $this->usr_replaced_by;
	}

	/**
	 * Get the [usr_ux] column value.
	 * 
	 * @return     string
	 */
	public function getUsrUx()
	{
		return $this->usr_ux;
	}

	/**
	 * Set the value of [usr_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_uid !== $v) {
			$this->usr_uid = $v;
			$this->modifiedColumns[] = UsersPeer::USR_UID;
		}

		return $this;
	} // setUsrUid()

	/**
	 * Set the value of [usr_username] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrUsername($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_username !== $v) {
			$this->usr_username = $v;
			$this->modifiedColumns[] = UsersPeer::USR_USERNAME;
		}

		return $this;
	} // setUsrUsername()

	/**
	 * Set the value of [usr_password] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_password !== $v) {
			$this->usr_password = $v;
			$this->modifiedColumns[] = UsersPeer::USR_PASSWORD;
		}

		return $this;
	} // setUsrPassword()

	/**
	 * Set the value of [usr_firstname] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrFirstname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_firstname !== $v) {
			$this->usr_firstname = $v;
			$this->modifiedColumns[] = UsersPeer::USR_FIRSTNAME;
		}

		return $this;
	} // setUsrFirstname()

	/**
	 * Set the value of [usr_lastname] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrLastname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_lastname !== $v) {
			$this->usr_lastname = $v;
			$this->modifiedColumns[] = UsersPeer::USR_LASTNAME;
		}

		return $this;
	} // setUsrLastname()

	/**
	 * Set the value of [usr_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_email !== $v) {
			$this->usr_email = $v;
			$this->modifiedColumns[] = UsersPeer::USR_EMAIL;
		}

		return $this;
	} // setUsrEmail()

	/**
	 * Sets the value of [usr_due_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrDueDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->usr_due_date !== null || $dt !== null) {
			$currentDateAsString = ($this->usr_due_date !== null && $tmpDt = new DateTime($this->usr_due_date)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->usr_due_date = $newDateAsString;
				$this->modifiedColumns[] = UsersPeer::USR_DUE_DATE;
			}
		} // if either are not null

		return $this;
	} // setUsrDueDate()

	/**
	 * Sets the value of [usr_create_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrCreateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->usr_create_date !== null || $dt !== null) {
			$currentDateAsString = ($this->usr_create_date !== null && $tmpDt = new DateTime($this->usr_create_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->usr_create_date = $newDateAsString;
				$this->modifiedColumns[] = UsersPeer::USR_CREATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setUsrCreateDate()

	/**
	 * Sets the value of [usr_update_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrUpdateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->usr_update_date !== null || $dt !== null) {
			$currentDateAsString = ($this->usr_update_date !== null && $tmpDt = new DateTime($this->usr_update_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->usr_update_date = $newDateAsString;
				$this->modifiedColumns[] = UsersPeer::USR_UPDATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setUsrUpdateDate()

	/**
	 * Set the value of [usr_status] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_status !== $v) {
			$this->usr_status = $v;
			$this->modifiedColumns[] = UsersPeer::USR_STATUS;
		}

		return $this;
	} // setUsrStatus()

	/**
	 * Set the value of [usr_country] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_country !== $v) {
			$this->usr_country = $v;
			$this->modifiedColumns[] = UsersPeer::USR_COUNTRY;
		}

		return $this;
	} // setUsrCountry()

	/**
	 * Set the value of [usr_city] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_city !== $v) {
			$this->usr_city = $v;
			$this->modifiedColumns[] = UsersPeer::USR_CITY;
		}

		return $this;
	} // setUsrCity()

	/**
	 * Set the value of [usr_location] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrLocation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_location !== $v) {
			$this->usr_location = $v;
			$this->modifiedColumns[] = UsersPeer::USR_LOCATION;
		}

		return $this;
	} // setUsrLocation()

	/**
	 * Set the value of [usr_address] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrAddress($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_address !== $v) {
			$this->usr_address = $v;
			$this->modifiedColumns[] = UsersPeer::USR_ADDRESS;
		}

		return $this;
	} // setUsrAddress()

	/**
	 * Set the value of [usr_phone] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrPhone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_phone !== $v) {
			$this->usr_phone = $v;
			$this->modifiedColumns[] = UsersPeer::USR_PHONE;
		}

		return $this;
	} // setUsrPhone()

	/**
	 * Set the value of [usr_fax] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrFax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_fax !== $v) {
			$this->usr_fax = $v;
			$this->modifiedColumns[] = UsersPeer::USR_FAX;
		}

		return $this;
	} // setUsrFax()

	/**
	 * Set the value of [usr_cellular] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrCellular($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_cellular !== $v) {
			$this->usr_cellular = $v;
			$this->modifiedColumns[] = UsersPeer::USR_CELLULAR;
		}

		return $this;
	} // setUsrCellular()

	/**
	 * Set the value of [usr_zip_code] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrZipCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_zip_code !== $v) {
			$this->usr_zip_code = $v;
			$this->modifiedColumns[] = UsersPeer::USR_ZIP_CODE;
		}

		return $this;
	} // setUsrZipCode()

	/**
	 * Set the value of [dep_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setDepUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dep_uid !== $v) {
			$this->dep_uid = $v;
			$this->modifiedColumns[] = UsersPeer::DEP_UID;
		}

		return $this;
	} // setDepUid()

	/**
	 * Set the value of [usr_position] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrPosition($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_position !== $v) {
			$this->usr_position = $v;
			$this->modifiedColumns[] = UsersPeer::USR_POSITION;
		}

		return $this;
	} // setUsrPosition()

	/**
	 * Set the value of [usr_resume] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrResume($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_resume !== $v) {
			$this->usr_resume = $v;
			$this->modifiedColumns[] = UsersPeer::USR_RESUME;
		}

		return $this;
	} // setUsrResume()

	/**
	 * Sets the value of [usr_birthday] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrBirthday($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->usr_birthday !== null || $dt !== null) {
			$currentDateAsString = ($this->usr_birthday !== null && $tmpDt = new DateTime($this->usr_birthday)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->usr_birthday = $newDateAsString;
				$this->modifiedColumns[] = UsersPeer::USR_BIRTHDAY;
			}
		} // if either are not null

		return $this;
	} // setUsrBirthday()

	/**
	 * Set the value of [usr_role] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrRole($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_role !== $v) {
			$this->usr_role = $v;
			$this->modifiedColumns[] = UsersPeer::USR_ROLE;
		}

		return $this;
	} // setUsrRole()

	/**
	 * Set the value of [usr_reports_to] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrReportsTo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_reports_to !== $v) {
			$this->usr_reports_to = $v;
			$this->modifiedColumns[] = UsersPeer::USR_REPORTS_TO;
		}

		return $this;
	} // setUsrReportsTo()

	/**
	 * Set the value of [usr_replaced_by] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrReplacedBy($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_replaced_by !== $v) {
			$this->usr_replaced_by = $v;
			$this->modifiedColumns[] = UsersPeer::USR_REPLACED_BY;
		}

		return $this;
	} // setUsrReplacedBy()

	/**
	 * Set the value of [usr_ux] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrUx($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_ux !== $v) {
			$this->usr_ux = $v;
			$this->modifiedColumns[] = UsersPeer::USR_UX;
		}

		return $this;
	} // setUsrUx()

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
			if ($this->usr_uid !== '') {
				return false;
			}

			if ($this->usr_username !== '') {
				return false;
			}

			if ($this->usr_password !== '') {
				return false;
			}

			if ($this->usr_firstname !== '') {
				return false;
			}

			if ($this->usr_lastname !== '') {
				return false;
			}

			if ($this->usr_email !== '') {
				return false;
			}

			if ($this->usr_status !== 'ACTIVE') {
				return false;
			}

			if ($this->usr_country !== '') {
				return false;
			}

			if ($this->usr_city !== '') {
				return false;
			}

			if ($this->usr_location !== '') {
				return false;
			}

			if ($this->usr_address !== '') {
				return false;
			}

			if ($this->usr_phone !== '') {
				return false;
			}

			if ($this->usr_fax !== '') {
				return false;
			}

			if ($this->usr_cellular !== '') {
				return false;
			}

			if ($this->usr_zip_code !== '') {
				return false;
			}

			if ($this->dep_uid !== '') {
				return false;
			}

			if ($this->usr_position !== '') {
				return false;
			}

			if ($this->usr_resume !== '') {
				return false;
			}

			if ($this->usr_role !== 'PROCESSMAKER_ADMIN') {
				return false;
			}

			if ($this->usr_reports_to !== '') {
				return false;
			}

			if ($this->usr_replaced_by !== '') {
				return false;
			}

			if ($this->usr_ux !== 'NORMAL') {
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

			$this->usr_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->usr_username = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->usr_password = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->usr_firstname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->usr_lastname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->usr_email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->usr_due_date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->usr_create_date = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->usr_update_date = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->usr_status = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->usr_country = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->usr_city = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->usr_location = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->usr_address = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->usr_phone = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->usr_fax = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->usr_cellular = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->usr_zip_code = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->dep_uid = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->usr_position = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->usr_resume = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->usr_birthday = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->usr_role = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->usr_reports_to = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->usr_replaced_by = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
			$this->usr_ux = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 26; // 26 = UsersPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Users object", $e);
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
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = UsersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = UsersQuery::create()
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
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				UsersPeer::addInstanceToPool($this);
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
					$affectedRows = UsersPeer::doUpdate($this, $con);
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


			if (($retval = UsersPeer::doValidate($this, $columns)) !== true) {
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
		$pos = UsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUsrUid();
				break;
			case 1:
				return $this->getUsrUsername();
				break;
			case 2:
				return $this->getUsrPassword();
				break;
			case 3:
				return $this->getUsrFirstname();
				break;
			case 4:
				return $this->getUsrLastname();
				break;
			case 5:
				return $this->getUsrEmail();
				break;
			case 6:
				return $this->getUsrDueDate();
				break;
			case 7:
				return $this->getUsrCreateDate();
				break;
			case 8:
				return $this->getUsrUpdateDate();
				break;
			case 9:
				return $this->getUsrStatus();
				break;
			case 10:
				return $this->getUsrCountry();
				break;
			case 11:
				return $this->getUsrCity();
				break;
			case 12:
				return $this->getUsrLocation();
				break;
			case 13:
				return $this->getUsrAddress();
				break;
			case 14:
				return $this->getUsrPhone();
				break;
			case 15:
				return $this->getUsrFax();
				break;
			case 16:
				return $this->getUsrCellular();
				break;
			case 17:
				return $this->getUsrZipCode();
				break;
			case 18:
				return $this->getDepUid();
				break;
			case 19:
				return $this->getUsrPosition();
				break;
			case 20:
				return $this->getUsrResume();
				break;
			case 21:
				return $this->getUsrBirthday();
				break;
			case 22:
				return $this->getUsrRole();
				break;
			case 23:
				return $this->getUsrReportsTo();
				break;
			case 24:
				return $this->getUsrReplacedBy();
				break;
			case 25:
				return $this->getUsrUx();
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
		if (isset($alreadyDumpedObjects['Users'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Users'][$this->getPrimaryKey()] = true;
		$keys = UsersPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getUsrUid(),
			$keys[1] => $this->getUsrUsername(),
			$keys[2] => $this->getUsrPassword(),
			$keys[3] => $this->getUsrFirstname(),
			$keys[4] => $this->getUsrLastname(),
			$keys[5] => $this->getUsrEmail(),
			$keys[6] => $this->getUsrDueDate(),
			$keys[7] => $this->getUsrCreateDate(),
			$keys[8] => $this->getUsrUpdateDate(),
			$keys[9] => $this->getUsrStatus(),
			$keys[10] => $this->getUsrCountry(),
			$keys[11] => $this->getUsrCity(),
			$keys[12] => $this->getUsrLocation(),
			$keys[13] => $this->getUsrAddress(),
			$keys[14] => $this->getUsrPhone(),
			$keys[15] => $this->getUsrFax(),
			$keys[16] => $this->getUsrCellular(),
			$keys[17] => $this->getUsrZipCode(),
			$keys[18] => $this->getDepUid(),
			$keys[19] => $this->getUsrPosition(),
			$keys[20] => $this->getUsrResume(),
			$keys[21] => $this->getUsrBirthday(),
			$keys[22] => $this->getUsrRole(),
			$keys[23] => $this->getUsrReportsTo(),
			$keys[24] => $this->getUsrReplacedBy(),
			$keys[25] => $this->getUsrUx(),
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
		$pos = UsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUsrUid($value);
				break;
			case 1:
				$this->setUsrUsername($value);
				break;
			case 2:
				$this->setUsrPassword($value);
				break;
			case 3:
				$this->setUsrFirstname($value);
				break;
			case 4:
				$this->setUsrLastname($value);
				break;
			case 5:
				$this->setUsrEmail($value);
				break;
			case 6:
				$this->setUsrDueDate($value);
				break;
			case 7:
				$this->setUsrCreateDate($value);
				break;
			case 8:
				$this->setUsrUpdateDate($value);
				break;
			case 9:
				$this->setUsrStatus($value);
				break;
			case 10:
				$this->setUsrCountry($value);
				break;
			case 11:
				$this->setUsrCity($value);
				break;
			case 12:
				$this->setUsrLocation($value);
				break;
			case 13:
				$this->setUsrAddress($value);
				break;
			case 14:
				$this->setUsrPhone($value);
				break;
			case 15:
				$this->setUsrFax($value);
				break;
			case 16:
				$this->setUsrCellular($value);
				break;
			case 17:
				$this->setUsrZipCode($value);
				break;
			case 18:
				$this->setDepUid($value);
				break;
			case 19:
				$this->setUsrPosition($value);
				break;
			case 20:
				$this->setUsrResume($value);
				break;
			case 21:
				$this->setUsrBirthday($value);
				break;
			case 22:
				$this->setUsrRole($value);
				break;
			case 23:
				$this->setUsrReportsTo($value);
				break;
			case 24:
				$this->setUsrReplacedBy($value);
				break;
			case 25:
				$this->setUsrUx($value);
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
		$keys = UsersPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setUsrUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUsrUsername($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUsrPassword($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUsrFirstname($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUsrLastname($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUsrEmail($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUsrDueDate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUsrCreateDate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUsrUpdateDate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUsrStatus($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setUsrCountry($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setUsrCity($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUsrLocation($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setUsrAddress($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setUsrPhone($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setUsrFax($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setUsrCellular($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setUsrZipCode($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDepUid($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setUsrPosition($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setUsrResume($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setUsrBirthday($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setUsrRole($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setUsrReportsTo($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setUsrReplacedBy($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setUsrUx($arr[$keys[25]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(UsersPeer::DATABASE_NAME);

		if ($this->isColumnModified(UsersPeer::USR_UID)) $criteria->add(UsersPeer::USR_UID, $this->usr_uid);
		if ($this->isColumnModified(UsersPeer::USR_USERNAME)) $criteria->add(UsersPeer::USR_USERNAME, $this->usr_username);
		if ($this->isColumnModified(UsersPeer::USR_PASSWORD)) $criteria->add(UsersPeer::USR_PASSWORD, $this->usr_password);
		if ($this->isColumnModified(UsersPeer::USR_FIRSTNAME)) $criteria->add(UsersPeer::USR_FIRSTNAME, $this->usr_firstname);
		if ($this->isColumnModified(UsersPeer::USR_LASTNAME)) $criteria->add(UsersPeer::USR_LASTNAME, $this->usr_lastname);
		if ($this->isColumnModified(UsersPeer::USR_EMAIL)) $criteria->add(UsersPeer::USR_EMAIL, $this->usr_email);
		if ($this->isColumnModified(UsersPeer::USR_DUE_DATE)) $criteria->add(UsersPeer::USR_DUE_DATE, $this->usr_due_date);
		if ($this->isColumnModified(UsersPeer::USR_CREATE_DATE)) $criteria->add(UsersPeer::USR_CREATE_DATE, $this->usr_create_date);
		if ($this->isColumnModified(UsersPeer::USR_UPDATE_DATE)) $criteria->add(UsersPeer::USR_UPDATE_DATE, $this->usr_update_date);
		if ($this->isColumnModified(UsersPeer::USR_STATUS)) $criteria->add(UsersPeer::USR_STATUS, $this->usr_status);
		if ($this->isColumnModified(UsersPeer::USR_COUNTRY)) $criteria->add(UsersPeer::USR_COUNTRY, $this->usr_country);
		if ($this->isColumnModified(UsersPeer::USR_CITY)) $criteria->add(UsersPeer::USR_CITY, $this->usr_city);
		if ($this->isColumnModified(UsersPeer::USR_LOCATION)) $criteria->add(UsersPeer::USR_LOCATION, $this->usr_location);
		if ($this->isColumnModified(UsersPeer::USR_ADDRESS)) $criteria->add(UsersPeer::USR_ADDRESS, $this->usr_address);
		if ($this->isColumnModified(UsersPeer::USR_PHONE)) $criteria->add(UsersPeer::USR_PHONE, $this->usr_phone);
		if ($this->isColumnModified(UsersPeer::USR_FAX)) $criteria->add(UsersPeer::USR_FAX, $this->usr_fax);
		if ($this->isColumnModified(UsersPeer::USR_CELLULAR)) $criteria->add(UsersPeer::USR_CELLULAR, $this->usr_cellular);
		if ($this->isColumnModified(UsersPeer::USR_ZIP_CODE)) $criteria->add(UsersPeer::USR_ZIP_CODE, $this->usr_zip_code);
		if ($this->isColumnModified(UsersPeer::DEP_UID)) $criteria->add(UsersPeer::DEP_UID, $this->dep_uid);
		if ($this->isColumnModified(UsersPeer::USR_POSITION)) $criteria->add(UsersPeer::USR_POSITION, $this->usr_position);
		if ($this->isColumnModified(UsersPeer::USR_RESUME)) $criteria->add(UsersPeer::USR_RESUME, $this->usr_resume);
		if ($this->isColumnModified(UsersPeer::USR_BIRTHDAY)) $criteria->add(UsersPeer::USR_BIRTHDAY, $this->usr_birthday);
		if ($this->isColumnModified(UsersPeer::USR_ROLE)) $criteria->add(UsersPeer::USR_ROLE, $this->usr_role);
		if ($this->isColumnModified(UsersPeer::USR_REPORTS_TO)) $criteria->add(UsersPeer::USR_REPORTS_TO, $this->usr_reports_to);
		if ($this->isColumnModified(UsersPeer::USR_REPLACED_BY)) $criteria->add(UsersPeer::USR_REPLACED_BY, $this->usr_replaced_by);
		if ($this->isColumnModified(UsersPeer::USR_UX)) $criteria->add(UsersPeer::USR_UX, $this->usr_ux);

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
		$criteria = new Criteria(UsersPeer::DATABASE_NAME);
		$criteria->add(UsersPeer::USR_UID, $this->usr_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getUsrUid();
	}

	/**
	 * Generic method to set the primary key (usr_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setUsrUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getUsrUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Users (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setUsrUid($this->getUsrUid());
		$copyObj->setUsrUsername($this->getUsrUsername());
		$copyObj->setUsrPassword($this->getUsrPassword());
		$copyObj->setUsrFirstname($this->getUsrFirstname());
		$copyObj->setUsrLastname($this->getUsrLastname());
		$copyObj->setUsrEmail($this->getUsrEmail());
		$copyObj->setUsrDueDate($this->getUsrDueDate());
		$copyObj->setUsrCreateDate($this->getUsrCreateDate());
		$copyObj->setUsrUpdateDate($this->getUsrUpdateDate());
		$copyObj->setUsrStatus($this->getUsrStatus());
		$copyObj->setUsrCountry($this->getUsrCountry());
		$copyObj->setUsrCity($this->getUsrCity());
		$copyObj->setUsrLocation($this->getUsrLocation());
		$copyObj->setUsrAddress($this->getUsrAddress());
		$copyObj->setUsrPhone($this->getUsrPhone());
		$copyObj->setUsrFax($this->getUsrFax());
		$copyObj->setUsrCellular($this->getUsrCellular());
		$copyObj->setUsrZipCode($this->getUsrZipCode());
		$copyObj->setDepUid($this->getDepUid());
		$copyObj->setUsrPosition($this->getUsrPosition());
		$copyObj->setUsrResume($this->getUsrResume());
		$copyObj->setUsrBirthday($this->getUsrBirthday());
		$copyObj->setUsrRole($this->getUsrRole());
		$copyObj->setUsrReportsTo($this->getUsrReportsTo());
		$copyObj->setUsrReplacedBy($this->getUsrReplacedBy());
		$copyObj->setUsrUx($this->getUsrUx());
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
	 * @return     Users Clone of current object.
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
	 * @return     UsersPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UsersPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->usr_uid = null;
		$this->usr_username = null;
		$this->usr_password = null;
		$this->usr_firstname = null;
		$this->usr_lastname = null;
		$this->usr_email = null;
		$this->usr_due_date = null;
		$this->usr_create_date = null;
		$this->usr_update_date = null;
		$this->usr_status = null;
		$this->usr_country = null;
		$this->usr_city = null;
		$this->usr_location = null;
		$this->usr_address = null;
		$this->usr_phone = null;
		$this->usr_fax = null;
		$this->usr_cellular = null;
		$this->usr_zip_code = null;
		$this->dep_uid = null;
		$this->usr_position = null;
		$this->usr_resume = null;
		$this->usr_birthday = null;
		$this->usr_role = null;
		$this->usr_reports_to = null;
		$this->usr_replaced_by = null;
		$this->usr_ux = null;
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
		return (string) $this->exportTo(UsersPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseUsers
