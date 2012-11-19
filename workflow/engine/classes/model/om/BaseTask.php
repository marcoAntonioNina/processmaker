<?php


/**
 * Base class that represents a row from the 'TASK' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseTask extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TaskPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TaskPeer
	 */
	protected static $peer;

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
	 * The value for the tas_type field.
	 * Note: this column has a database default value of: 'NORMAL'
	 * @var        string
	 */
	protected $tas_type;

	/**
	 * The value for the tas_duration field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $tas_duration;

	/**
	 * The value for the tas_delay_type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_delay_type;

	/**
	 * The value for the tas_temporizer field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $tas_temporizer;

	/**
	 * The value for the tas_type_day field.
	 * Note: this column has a database default value of: '1'
	 * @var        string
	 */
	protected $tas_type_day;

	/**
	 * The value for the tas_timeunit field.
	 * Note: this column has a database default value of: 'DAYS'
	 * @var        string
	 */
	protected $tas_timeunit;

	/**
	 * The value for the tas_alert field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_alert;

	/**
	 * The value for the tas_priority_variable field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_priority_variable;

	/**
	 * The value for the tas_assign_type field.
	 * Note: this column has a database default value of: 'BALANCED'
	 * @var        string
	 */
	protected $tas_assign_type;

	/**
	 * The value for the tas_assign_variable field.
	 * Note: this column has a database default value of: '@@SYS_NEXT_USER_TO_BE_ASSIGNED'
	 * @var        string
	 */
	protected $tas_assign_variable;

	/**
	 * The value for the tas_group_variable field.
	 * Note: this column has a database default value of: '@@SYS_GROUP_TO_BE_ASSIGNED'
	 * @var        string
	 */
	protected $tas_group_variable;

	/**
	 * The value for the tas_mi_instance_variable field.
	 * Note: this column has a database default value of: '@@SYS_VAR_TOTAL_INSTANCE'
	 * @var        string
	 */
	protected $tas_mi_instance_variable;

	/**
	 * The value for the tas_mi_complete_variable field.
	 * Note: this column has a database default value of: '@@SYS_VAR_TOTAL_INSTANCES_COMPLETE'
	 * @var        string
	 */
	protected $tas_mi_complete_variable;

	/**
	 * The value for the tas_assign_location field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_assign_location;

	/**
	 * The value for the tas_assign_location_adhoc field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_assign_location_adhoc;

	/**
	 * The value for the tas_transfer_fly field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_transfer_fly;

	/**
	 * The value for the tas_last_assigned field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $tas_last_assigned;

	/**
	 * The value for the tas_user field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $tas_user;

	/**
	 * The value for the tas_can_upload field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_can_upload;

	/**
	 * The value for the tas_view_upload field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_view_upload;

	/**
	 * The value for the tas_view_additional_documentation field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_view_additional_documentation;

	/**
	 * The value for the tas_can_cancel field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_can_cancel;

	/**
	 * The value for the tas_owner_app field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_owner_app;

	/**
	 * The value for the stg_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $stg_uid;

	/**
	 * The value for the tas_can_pause field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_can_pause;

	/**
	 * The value for the tas_can_send_message field.
	 * Note: this column has a database default value of: 'TRUE'
	 * @var        string
	 */
	protected $tas_can_send_message;

	/**
	 * The value for the tas_can_delete_docs field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_can_delete_docs;

	/**
	 * The value for the tas_self_service field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_self_service;

	/**
	 * The value for the tas_start field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_start;

	/**
	 * The value for the tas_to_last_user field.
	 * Note: this column has a database default value of: 'FALSE'
	 * @var        string
	 */
	protected $tas_to_last_user;

	/**
	 * The value for the tas_send_last_email field.
	 * Note: this column has a database default value of: 'TRUE'
	 * @var        string
	 */
	protected $tas_send_last_email;

	/**
	 * The value for the tas_derivation field.
	 * Note: this column has a database default value of: 'NORMAL'
	 * @var        string
	 */
	protected $tas_derivation;

	/**
	 * The value for the tas_posx field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $tas_posx;

	/**
	 * The value for the tas_posy field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $tas_posy;

	/**
	 * The value for the tas_width field.
	 * Note: this column has a database default value of: 110
	 * @var        int
	 */
	protected $tas_width;

	/**
	 * The value for the tas_height field.
	 * Note: this column has a database default value of: 60
	 * @var        int
	 */
	protected $tas_height;

	/**
	 * The value for the tas_color field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_color;

	/**
	 * The value for the tas_evn_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_evn_uid;

	/**
	 * The value for the tas_boundary field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_boundary;

	/**
	 * The value for the tas_derivation_screen_tpl field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_derivation_screen_tpl;

	/**
	 * The value for the tas_selfservice_timeout field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $tas_selfservice_timeout;

	/**
	 * The value for the tas_selfservice_time field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_selfservice_time;

	/**
	 * The value for the tas_selfservice_time_unit field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_selfservice_time_unit;

	/**
	 * The value for the tas_selfservice_trigger_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_selfservice_trigger_uid;

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
		$this->tas_type = 'NORMAL';
		$this->tas_duration = 0;
		$this->tas_delay_type = '';
		$this->tas_temporizer = 0;
		$this->tas_type_day = '1';
		$this->tas_timeunit = 'DAYS';
		$this->tas_alert = 'FALSE';
		$this->tas_priority_variable = '';
		$this->tas_assign_type = 'BALANCED';
		$this->tas_assign_variable = '@@SYS_NEXT_USER_TO_BE_ASSIGNED';
		$this->tas_group_variable = '@@SYS_GROUP_TO_BE_ASSIGNED';
		$this->tas_mi_instance_variable = '@@SYS_VAR_TOTAL_INSTANCE';
		$this->tas_mi_complete_variable = '@@SYS_VAR_TOTAL_INSTANCES_COMPLETE';
		$this->tas_assign_location = 'FALSE';
		$this->tas_assign_location_adhoc = 'FALSE';
		$this->tas_transfer_fly = 'FALSE';
		$this->tas_last_assigned = '0';
		$this->tas_user = '0';
		$this->tas_can_upload = 'FALSE';
		$this->tas_view_upload = 'FALSE';
		$this->tas_view_additional_documentation = 'FALSE';
		$this->tas_can_cancel = 'FALSE';
		$this->tas_owner_app = '';
		$this->stg_uid = '';
		$this->tas_can_pause = 'FALSE';
		$this->tas_can_send_message = 'TRUE';
		$this->tas_can_delete_docs = 'FALSE';
		$this->tas_self_service = 'FALSE';
		$this->tas_start = 'FALSE';
		$this->tas_to_last_user = 'FALSE';
		$this->tas_send_last_email = 'TRUE';
		$this->tas_derivation = 'NORMAL';
		$this->tas_posx = 0;
		$this->tas_posy = 0;
		$this->tas_width = 110;
		$this->tas_height = 60;
		$this->tas_color = '';
		$this->tas_evn_uid = '';
		$this->tas_boundary = '';
		$this->tas_derivation_screen_tpl = '';
		$this->tas_selfservice_timeout = 0;
		$this->tas_selfservice_time = '';
		$this->tas_selfservice_time_unit = '';
		$this->tas_selfservice_trigger_uid = '';
	}

	/**
	 * Initializes internal state of BaseTask object.
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
	 * Get the [tas_uid] column value.
	 * 
	 * @return     string
	 */
	public function getTasUid()
	{
		return $this->tas_uid;
	}

	/**
	 * Get the [tas_type] column value.
	 * 
	 * @return     string
	 */
	public function getTasType()
	{
		return $this->tas_type;
	}

	/**
	 * Get the [tas_duration] column value.
	 * 
	 * @return     double
	 */
	public function getTasDuration()
	{
		return $this->tas_duration;
	}

	/**
	 * Get the [tas_delay_type] column value.
	 * 
	 * @return     string
	 */
	public function getTasDelayType()
	{
		return $this->tas_delay_type;
	}

	/**
	 * Get the [tas_temporizer] column value.
	 * 
	 * @return     double
	 */
	public function getTasTemporizer()
	{
		return $this->tas_temporizer;
	}

	/**
	 * Get the [tas_type_day] column value.
	 * 
	 * @return     string
	 */
	public function getTasTypeDay()
	{
		return $this->tas_type_day;
	}

	/**
	 * Get the [tas_timeunit] column value.
	 * 
	 * @return     string
	 */
	public function getTasTimeunit()
	{
		return $this->tas_timeunit;
	}

	/**
	 * Get the [tas_alert] column value.
	 * 
	 * @return     string
	 */
	public function getTasAlert()
	{
		return $this->tas_alert;
	}

	/**
	 * Get the [tas_priority_variable] column value.
	 * 
	 * @return     string
	 */
	public function getTasPriorityVariable()
	{
		return $this->tas_priority_variable;
	}

	/**
	 * Get the [tas_assign_type] column value.
	 * 
	 * @return     string
	 */
	public function getTasAssignType()
	{
		return $this->tas_assign_type;
	}

	/**
	 * Get the [tas_assign_variable] column value.
	 * 
	 * @return     string
	 */
	public function getTasAssignVariable()
	{
		return $this->tas_assign_variable;
	}

	/**
	 * Get the [tas_group_variable] column value.
	 * 
	 * @return     string
	 */
	public function getTasGroupVariable()
	{
		return $this->tas_group_variable;
	}

	/**
	 * Get the [tas_mi_instance_variable] column value.
	 * 
	 * @return     string
	 */
	public function getTasMiInstanceVariable()
	{
		return $this->tas_mi_instance_variable;
	}

	/**
	 * Get the [tas_mi_complete_variable] column value.
	 * 
	 * @return     string
	 */
	public function getTasMiCompleteVariable()
	{
		return $this->tas_mi_complete_variable;
	}

	/**
	 * Get the [tas_assign_location] column value.
	 * 
	 * @return     string
	 */
	public function getTasAssignLocation()
	{
		return $this->tas_assign_location;
	}

	/**
	 * Get the [tas_assign_location_adhoc] column value.
	 * 
	 * @return     string
	 */
	public function getTasAssignLocationAdhoc()
	{
		return $this->tas_assign_location_adhoc;
	}

	/**
	 * Get the [tas_transfer_fly] column value.
	 * 
	 * @return     string
	 */
	public function getTasTransferFly()
	{
		return $this->tas_transfer_fly;
	}

	/**
	 * Get the [tas_last_assigned] column value.
	 * 
	 * @return     string
	 */
	public function getTasLastAssigned()
	{
		return $this->tas_last_assigned;
	}

	/**
	 * Get the [tas_user] column value.
	 * 
	 * @return     string
	 */
	public function getTasUser()
	{
		return $this->tas_user;
	}

	/**
	 * Get the [tas_can_upload] column value.
	 * 
	 * @return     string
	 */
	public function getTasCanUpload()
	{
		return $this->tas_can_upload;
	}

	/**
	 * Get the [tas_view_upload] column value.
	 * 
	 * @return     string
	 */
	public function getTasViewUpload()
	{
		return $this->tas_view_upload;
	}

	/**
	 * Get the [tas_view_additional_documentation] column value.
	 * 
	 * @return     string
	 */
	public function getTasViewAdditionalDocumentation()
	{
		return $this->tas_view_additional_documentation;
	}

	/**
	 * Get the [tas_can_cancel] column value.
	 * 
	 * @return     string
	 */
	public function getTasCanCancel()
	{
		return $this->tas_can_cancel;
	}

	/**
	 * Get the [tas_owner_app] column value.
	 * 
	 * @return     string
	 */
	public function getTasOwnerApp()
	{
		return $this->tas_owner_app;
	}

	/**
	 * Get the [stg_uid] column value.
	 * 
	 * @return     string
	 */
	public function getStgUid()
	{
		return $this->stg_uid;
	}

	/**
	 * Get the [tas_can_pause] column value.
	 * 
	 * @return     string
	 */
	public function getTasCanPause()
	{
		return $this->tas_can_pause;
	}

	/**
	 * Get the [tas_can_send_message] column value.
	 * 
	 * @return     string
	 */
	public function getTasCanSendMessage()
	{
		return $this->tas_can_send_message;
	}

	/**
	 * Get the [tas_can_delete_docs] column value.
	 * 
	 * @return     string
	 */
	public function getTasCanDeleteDocs()
	{
		return $this->tas_can_delete_docs;
	}

	/**
	 * Get the [tas_self_service] column value.
	 * 
	 * @return     string
	 */
	public function getTasSelfService()
	{
		return $this->tas_self_service;
	}

	/**
	 * Get the [tas_start] column value.
	 * 
	 * @return     string
	 */
	public function getTasStart()
	{
		return $this->tas_start;
	}

	/**
	 * Get the [tas_to_last_user] column value.
	 * 
	 * @return     string
	 */
	public function getTasToLastUser()
	{
		return $this->tas_to_last_user;
	}

	/**
	 * Get the [tas_send_last_email] column value.
	 * 
	 * @return     string
	 */
	public function getTasSendLastEmail()
	{
		return $this->tas_send_last_email;
	}

	/**
	 * Get the [tas_derivation] column value.
	 * 
	 * @return     string
	 */
	public function getTasDerivation()
	{
		return $this->tas_derivation;
	}

	/**
	 * Get the [tas_posx] column value.
	 * 
	 * @return     int
	 */
	public function getTasPosx()
	{
		return $this->tas_posx;
	}

	/**
	 * Get the [tas_posy] column value.
	 * 
	 * @return     int
	 */
	public function getTasPosy()
	{
		return $this->tas_posy;
	}

	/**
	 * Get the [tas_width] column value.
	 * 
	 * @return     int
	 */
	public function getTasWidth()
	{
		return $this->tas_width;
	}

	/**
	 * Get the [tas_height] column value.
	 * 
	 * @return     int
	 */
	public function getTasHeight()
	{
		return $this->tas_height;
	}

	/**
	 * Get the [tas_color] column value.
	 * 
	 * @return     string
	 */
	public function getTasColor()
	{
		return $this->tas_color;
	}

	/**
	 * Get the [tas_evn_uid] column value.
	 * 
	 * @return     string
	 */
	public function getTasEvnUid()
	{
		return $this->tas_evn_uid;
	}

	/**
	 * Get the [tas_boundary] column value.
	 * 
	 * @return     string
	 */
	public function getTasBoundary()
	{
		return $this->tas_boundary;
	}

	/**
	 * Get the [tas_derivation_screen_tpl] column value.
	 * 
	 * @return     string
	 */
	public function getTasDerivationScreenTpl()
	{
		return $this->tas_derivation_screen_tpl;
	}

	/**
	 * Get the [tas_selfservice_timeout] column value.
	 * 
	 * @return     int
	 */
	public function getTasSelfserviceTimeout()
	{
		return $this->tas_selfservice_timeout;
	}

	/**
	 * Get the [tas_selfservice_time] column value.
	 * 
	 * @return     string
	 */
	public function getTasSelfserviceTime()
	{
		return $this->tas_selfservice_time;
	}

	/**
	 * Get the [tas_selfservice_time_unit] column value.
	 * 
	 * @return     string
	 */
	public function getTasSelfserviceTimeUnit()
	{
		return $this->tas_selfservice_time_unit;
	}

	/**
	 * Get the [tas_selfservice_trigger_uid] column value.
	 * 
	 * @return     string
	 */
	public function getTasSelfserviceTriggerUid()
	{
		return $this->tas_selfservice_trigger_uid;
	}

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = TaskPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [tas_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_uid !== $v) {
			$this->tas_uid = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_UID;
		}

		return $this;
	} // setTasUid()

	/**
	 * Set the value of [tas_type] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_type !== $v) {
			$this->tas_type = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_TYPE;
		}

		return $this;
	} // setTasType()

	/**
	 * Set the value of [tas_duration] column.
	 * 
	 * @param      double $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasDuration($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->tas_duration !== $v) {
			$this->tas_duration = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_DURATION;
		}

		return $this;
	} // setTasDuration()

	/**
	 * Set the value of [tas_delay_type] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasDelayType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_delay_type !== $v) {
			$this->tas_delay_type = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_DELAY_TYPE;
		}

		return $this;
	} // setTasDelayType()

	/**
	 * Set the value of [tas_temporizer] column.
	 * 
	 * @param      double $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasTemporizer($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->tas_temporizer !== $v) {
			$this->tas_temporizer = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_TEMPORIZER;
		}

		return $this;
	} // setTasTemporizer()

	/**
	 * Set the value of [tas_type_day] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasTypeDay($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_type_day !== $v) {
			$this->tas_type_day = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_TYPE_DAY;
		}

		return $this;
	} // setTasTypeDay()

	/**
	 * Set the value of [tas_timeunit] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasTimeunit($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_timeunit !== $v) {
			$this->tas_timeunit = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_TIMEUNIT;
		}

		return $this;
	} // setTasTimeunit()

	/**
	 * Set the value of [tas_alert] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasAlert($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_alert !== $v) {
			$this->tas_alert = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_ALERT;
		}

		return $this;
	} // setTasAlert()

	/**
	 * Set the value of [tas_priority_variable] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasPriorityVariable($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_priority_variable !== $v) {
			$this->tas_priority_variable = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_PRIORITY_VARIABLE;
		}

		return $this;
	} // setTasPriorityVariable()

	/**
	 * Set the value of [tas_assign_type] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasAssignType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_assign_type !== $v) {
			$this->tas_assign_type = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_ASSIGN_TYPE;
		}

		return $this;
	} // setTasAssignType()

	/**
	 * Set the value of [tas_assign_variable] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasAssignVariable($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_assign_variable !== $v) {
			$this->tas_assign_variable = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_ASSIGN_VARIABLE;
		}

		return $this;
	} // setTasAssignVariable()

	/**
	 * Set the value of [tas_group_variable] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasGroupVariable($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_group_variable !== $v) {
			$this->tas_group_variable = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_GROUP_VARIABLE;
		}

		return $this;
	} // setTasGroupVariable()

	/**
	 * Set the value of [tas_mi_instance_variable] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasMiInstanceVariable($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_mi_instance_variable !== $v) {
			$this->tas_mi_instance_variable = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_MI_INSTANCE_VARIABLE;
		}

		return $this;
	} // setTasMiInstanceVariable()

	/**
	 * Set the value of [tas_mi_complete_variable] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasMiCompleteVariable($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_mi_complete_variable !== $v) {
			$this->tas_mi_complete_variable = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_MI_COMPLETE_VARIABLE;
		}

		return $this;
	} // setTasMiCompleteVariable()

	/**
	 * Set the value of [tas_assign_location] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasAssignLocation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_assign_location !== $v) {
			$this->tas_assign_location = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_ASSIGN_LOCATION;
		}

		return $this;
	} // setTasAssignLocation()

	/**
	 * Set the value of [tas_assign_location_adhoc] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasAssignLocationAdhoc($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_assign_location_adhoc !== $v) {
			$this->tas_assign_location_adhoc = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_ASSIGN_LOCATION_ADHOC;
		}

		return $this;
	} // setTasAssignLocationAdhoc()

	/**
	 * Set the value of [tas_transfer_fly] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasTransferFly($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_transfer_fly !== $v) {
			$this->tas_transfer_fly = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_TRANSFER_FLY;
		}

		return $this;
	} // setTasTransferFly()

	/**
	 * Set the value of [tas_last_assigned] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasLastAssigned($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_last_assigned !== $v) {
			$this->tas_last_assigned = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_LAST_ASSIGNED;
		}

		return $this;
	} // setTasLastAssigned()

	/**
	 * Set the value of [tas_user] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_user !== $v) {
			$this->tas_user = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_USER;
		}

		return $this;
	} // setTasUser()

	/**
	 * Set the value of [tas_can_upload] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasCanUpload($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_can_upload !== $v) {
			$this->tas_can_upload = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_CAN_UPLOAD;
		}

		return $this;
	} // setTasCanUpload()

	/**
	 * Set the value of [tas_view_upload] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasViewUpload($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_view_upload !== $v) {
			$this->tas_view_upload = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_VIEW_UPLOAD;
		}

		return $this;
	} // setTasViewUpload()

	/**
	 * Set the value of [tas_view_additional_documentation] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasViewAdditionalDocumentation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_view_additional_documentation !== $v) {
			$this->tas_view_additional_documentation = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION;
		}

		return $this;
	} // setTasViewAdditionalDocumentation()

	/**
	 * Set the value of [tas_can_cancel] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasCanCancel($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_can_cancel !== $v) {
			$this->tas_can_cancel = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_CAN_CANCEL;
		}

		return $this;
	} // setTasCanCancel()

	/**
	 * Set the value of [tas_owner_app] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasOwnerApp($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_owner_app !== $v) {
			$this->tas_owner_app = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_OWNER_APP;
		}

		return $this;
	} // setTasOwnerApp()

	/**
	 * Set the value of [stg_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setStgUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->stg_uid !== $v) {
			$this->stg_uid = $v;
			$this->modifiedColumns[] = TaskPeer::STG_UID;
		}

		return $this;
	} // setStgUid()

	/**
	 * Set the value of [tas_can_pause] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasCanPause($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_can_pause !== $v) {
			$this->tas_can_pause = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_CAN_PAUSE;
		}

		return $this;
	} // setTasCanPause()

	/**
	 * Set the value of [tas_can_send_message] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasCanSendMessage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_can_send_message !== $v) {
			$this->tas_can_send_message = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_CAN_SEND_MESSAGE;
		}

		return $this;
	} // setTasCanSendMessage()

	/**
	 * Set the value of [tas_can_delete_docs] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasCanDeleteDocs($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_can_delete_docs !== $v) {
			$this->tas_can_delete_docs = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_CAN_DELETE_DOCS;
		}

		return $this;
	} // setTasCanDeleteDocs()

	/**
	 * Set the value of [tas_self_service] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasSelfService($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_self_service !== $v) {
			$this->tas_self_service = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_SELF_SERVICE;
		}

		return $this;
	} // setTasSelfService()

	/**
	 * Set the value of [tas_start] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasStart($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_start !== $v) {
			$this->tas_start = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_START;
		}

		return $this;
	} // setTasStart()

	/**
	 * Set the value of [tas_to_last_user] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasToLastUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_to_last_user !== $v) {
			$this->tas_to_last_user = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_TO_LAST_USER;
		}

		return $this;
	} // setTasToLastUser()

	/**
	 * Set the value of [tas_send_last_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasSendLastEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_send_last_email !== $v) {
			$this->tas_send_last_email = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_SEND_LAST_EMAIL;
		}

		return $this;
	} // setTasSendLastEmail()

	/**
	 * Set the value of [tas_derivation] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasDerivation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_derivation !== $v) {
			$this->tas_derivation = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_DERIVATION;
		}

		return $this;
	} // setTasDerivation()

	/**
	 * Set the value of [tas_posx] column.
	 * 
	 * @param      int $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasPosx($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tas_posx !== $v) {
			$this->tas_posx = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_POSX;
		}

		return $this;
	} // setTasPosx()

	/**
	 * Set the value of [tas_posy] column.
	 * 
	 * @param      int $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasPosy($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tas_posy !== $v) {
			$this->tas_posy = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_POSY;
		}

		return $this;
	} // setTasPosy()

	/**
	 * Set the value of [tas_width] column.
	 * 
	 * @param      int $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasWidth($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tas_width !== $v) {
			$this->tas_width = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_WIDTH;
		}

		return $this;
	} // setTasWidth()

	/**
	 * Set the value of [tas_height] column.
	 * 
	 * @param      int $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasHeight($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tas_height !== $v) {
			$this->tas_height = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_HEIGHT;
		}

		return $this;
	} // setTasHeight()

	/**
	 * Set the value of [tas_color] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasColor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_color !== $v) {
			$this->tas_color = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_COLOR;
		}

		return $this;
	} // setTasColor()

	/**
	 * Set the value of [tas_evn_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasEvnUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_evn_uid !== $v) {
			$this->tas_evn_uid = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_EVN_UID;
		}

		return $this;
	} // setTasEvnUid()

	/**
	 * Set the value of [tas_boundary] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasBoundary($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_boundary !== $v) {
			$this->tas_boundary = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_BOUNDARY;
		}

		return $this;
	} // setTasBoundary()

	/**
	 * Set the value of [tas_derivation_screen_tpl] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasDerivationScreenTpl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_derivation_screen_tpl !== $v) {
			$this->tas_derivation_screen_tpl = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_DERIVATION_SCREEN_TPL;
		}

		return $this;
	} // setTasDerivationScreenTpl()

	/**
	 * Set the value of [tas_selfservice_timeout] column.
	 * 
	 * @param      int $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasSelfserviceTimeout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tas_selfservice_timeout !== $v) {
			$this->tas_selfservice_timeout = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_SELFSERVICE_TIMEOUT;
		}

		return $this;
	} // setTasSelfserviceTimeout()

	/**
	 * Set the value of [tas_selfservice_time] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasSelfserviceTime($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_selfservice_time !== $v) {
			$this->tas_selfservice_time = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_SELFSERVICE_TIME;
		}

		return $this;
	} // setTasSelfserviceTime()

	/**
	 * Set the value of [tas_selfservice_time_unit] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasSelfserviceTimeUnit($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_selfservice_time_unit !== $v) {
			$this->tas_selfservice_time_unit = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_SELFSERVICE_TIME_UNIT;
		}

		return $this;
	} // setTasSelfserviceTimeUnit()

	/**
	 * Set the value of [tas_selfservice_trigger_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Task The current object (for fluent API support)
	 */
	public function setTasSelfserviceTriggerUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_selfservice_trigger_uid !== $v) {
			$this->tas_selfservice_trigger_uid = $v;
			$this->modifiedColumns[] = TaskPeer::TAS_SELFSERVICE_TRIGGER_UID;
		}

		return $this;
	} // setTasSelfserviceTriggerUid()

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

			if ($this->tas_type !== 'NORMAL') {
				return false;
			}

			if ($this->tas_duration !== 0) {
				return false;
			}

			if ($this->tas_delay_type !== '') {
				return false;
			}

			if ($this->tas_temporizer !== 0) {
				return false;
			}

			if ($this->tas_type_day !== '1') {
				return false;
			}

			if ($this->tas_timeunit !== 'DAYS') {
				return false;
			}

			if ($this->tas_alert !== 'FALSE') {
				return false;
			}

			if ($this->tas_priority_variable !== '') {
				return false;
			}

			if ($this->tas_assign_type !== 'BALANCED') {
				return false;
			}

			if ($this->tas_assign_variable !== '@@SYS_NEXT_USER_TO_BE_ASSIGNED') {
				return false;
			}

			if ($this->tas_group_variable !== '@@SYS_GROUP_TO_BE_ASSIGNED') {
				return false;
			}

			if ($this->tas_mi_instance_variable !== '@@SYS_VAR_TOTAL_INSTANCE') {
				return false;
			}

			if ($this->tas_mi_complete_variable !== '@@SYS_VAR_TOTAL_INSTANCES_COMPLETE') {
				return false;
			}

			if ($this->tas_assign_location !== 'FALSE') {
				return false;
			}

			if ($this->tas_assign_location_adhoc !== 'FALSE') {
				return false;
			}

			if ($this->tas_transfer_fly !== 'FALSE') {
				return false;
			}

			if ($this->tas_last_assigned !== '0') {
				return false;
			}

			if ($this->tas_user !== '0') {
				return false;
			}

			if ($this->tas_can_upload !== 'FALSE') {
				return false;
			}

			if ($this->tas_view_upload !== 'FALSE') {
				return false;
			}

			if ($this->tas_view_additional_documentation !== 'FALSE') {
				return false;
			}

			if ($this->tas_can_cancel !== 'FALSE') {
				return false;
			}

			if ($this->tas_owner_app !== '') {
				return false;
			}

			if ($this->stg_uid !== '') {
				return false;
			}

			if ($this->tas_can_pause !== 'FALSE') {
				return false;
			}

			if ($this->tas_can_send_message !== 'TRUE') {
				return false;
			}

			if ($this->tas_can_delete_docs !== 'FALSE') {
				return false;
			}

			if ($this->tas_self_service !== 'FALSE') {
				return false;
			}

			if ($this->tas_start !== 'FALSE') {
				return false;
			}

			if ($this->tas_to_last_user !== 'FALSE') {
				return false;
			}

			if ($this->tas_send_last_email !== 'TRUE') {
				return false;
			}

			if ($this->tas_derivation !== 'NORMAL') {
				return false;
			}

			if ($this->tas_posx !== 0) {
				return false;
			}

			if ($this->tas_posy !== 0) {
				return false;
			}

			if ($this->tas_width !== 110) {
				return false;
			}

			if ($this->tas_height !== 60) {
				return false;
			}

			if ($this->tas_color !== '') {
				return false;
			}

			if ($this->tas_evn_uid !== '') {
				return false;
			}

			if ($this->tas_boundary !== '') {
				return false;
			}

			if ($this->tas_derivation_screen_tpl !== '') {
				return false;
			}

			if ($this->tas_selfservice_timeout !== 0) {
				return false;
			}

			if ($this->tas_selfservice_time !== '') {
				return false;
			}

			if ($this->tas_selfservice_time_unit !== '') {
				return false;
			}

			if ($this->tas_selfservice_trigger_uid !== '') {
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
			$this->tas_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->tas_type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->tas_duration = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
			$this->tas_delay_type = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->tas_temporizer = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
			$this->tas_type_day = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->tas_timeunit = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->tas_alert = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->tas_priority_variable = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->tas_assign_type = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->tas_assign_variable = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->tas_group_variable = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->tas_mi_instance_variable = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->tas_mi_complete_variable = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->tas_assign_location = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->tas_assign_location_adhoc = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->tas_transfer_fly = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->tas_last_assigned = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->tas_user = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->tas_can_upload = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->tas_view_upload = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->tas_view_additional_documentation = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->tas_can_cancel = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->tas_owner_app = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
			$this->stg_uid = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->tas_can_pause = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->tas_can_send_message = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->tas_can_delete_docs = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
			$this->tas_self_service = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
			$this->tas_start = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
			$this->tas_to_last_user = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
			$this->tas_send_last_email = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
			$this->tas_derivation = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
			$this->tas_posx = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
			$this->tas_posy = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
			$this->tas_width = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
			$this->tas_height = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
			$this->tas_color = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
			$this->tas_evn_uid = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
			$this->tas_boundary = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
			$this->tas_derivation_screen_tpl = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
			$this->tas_selfservice_timeout = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
			$this->tas_selfservice_time = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
			$this->tas_selfservice_time_unit = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
			$this->tas_selfservice_trigger_uid = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 46; // 46 = TaskPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Task object", $e);
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
			$con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TaskPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = TaskQuery::create()
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
			$con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				TaskPeer::addInstanceToPool($this);
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
					$affectedRows = TaskPeer::doUpdate($this, $con);
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


			if (($retval = TaskPeer::doValidate($this, $columns)) !== true) {
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
		$pos = TaskPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTasUid();
				break;
			case 2:
				return $this->getTasType();
				break;
			case 3:
				return $this->getTasDuration();
				break;
			case 4:
				return $this->getTasDelayType();
				break;
			case 5:
				return $this->getTasTemporizer();
				break;
			case 6:
				return $this->getTasTypeDay();
				break;
			case 7:
				return $this->getTasTimeunit();
				break;
			case 8:
				return $this->getTasAlert();
				break;
			case 9:
				return $this->getTasPriorityVariable();
				break;
			case 10:
				return $this->getTasAssignType();
				break;
			case 11:
				return $this->getTasAssignVariable();
				break;
			case 12:
				return $this->getTasGroupVariable();
				break;
			case 13:
				return $this->getTasMiInstanceVariable();
				break;
			case 14:
				return $this->getTasMiCompleteVariable();
				break;
			case 15:
				return $this->getTasAssignLocation();
				break;
			case 16:
				return $this->getTasAssignLocationAdhoc();
				break;
			case 17:
				return $this->getTasTransferFly();
				break;
			case 18:
				return $this->getTasLastAssigned();
				break;
			case 19:
				return $this->getTasUser();
				break;
			case 20:
				return $this->getTasCanUpload();
				break;
			case 21:
				return $this->getTasViewUpload();
				break;
			case 22:
				return $this->getTasViewAdditionalDocumentation();
				break;
			case 23:
				return $this->getTasCanCancel();
				break;
			case 24:
				return $this->getTasOwnerApp();
				break;
			case 25:
				return $this->getStgUid();
				break;
			case 26:
				return $this->getTasCanPause();
				break;
			case 27:
				return $this->getTasCanSendMessage();
				break;
			case 28:
				return $this->getTasCanDeleteDocs();
				break;
			case 29:
				return $this->getTasSelfService();
				break;
			case 30:
				return $this->getTasStart();
				break;
			case 31:
				return $this->getTasToLastUser();
				break;
			case 32:
				return $this->getTasSendLastEmail();
				break;
			case 33:
				return $this->getTasDerivation();
				break;
			case 34:
				return $this->getTasPosx();
				break;
			case 35:
				return $this->getTasPosy();
				break;
			case 36:
				return $this->getTasWidth();
				break;
			case 37:
				return $this->getTasHeight();
				break;
			case 38:
				return $this->getTasColor();
				break;
			case 39:
				return $this->getTasEvnUid();
				break;
			case 40:
				return $this->getTasBoundary();
				break;
			case 41:
				return $this->getTasDerivationScreenTpl();
				break;
			case 42:
				return $this->getTasSelfserviceTimeout();
				break;
			case 43:
				return $this->getTasSelfserviceTime();
				break;
			case 44:
				return $this->getTasSelfserviceTimeUnit();
				break;
			case 45:
				return $this->getTasSelfserviceTriggerUid();
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
		if (isset($alreadyDumpedObjects['Task'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Task'][$this->getPrimaryKey()] = true;
		$keys = TaskPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getProUid(),
			$keys[1] => $this->getTasUid(),
			$keys[2] => $this->getTasType(),
			$keys[3] => $this->getTasDuration(),
			$keys[4] => $this->getTasDelayType(),
			$keys[5] => $this->getTasTemporizer(),
			$keys[6] => $this->getTasTypeDay(),
			$keys[7] => $this->getTasTimeunit(),
			$keys[8] => $this->getTasAlert(),
			$keys[9] => $this->getTasPriorityVariable(),
			$keys[10] => $this->getTasAssignType(),
			$keys[11] => $this->getTasAssignVariable(),
			$keys[12] => $this->getTasGroupVariable(),
			$keys[13] => $this->getTasMiInstanceVariable(),
			$keys[14] => $this->getTasMiCompleteVariable(),
			$keys[15] => $this->getTasAssignLocation(),
			$keys[16] => $this->getTasAssignLocationAdhoc(),
			$keys[17] => $this->getTasTransferFly(),
			$keys[18] => $this->getTasLastAssigned(),
			$keys[19] => $this->getTasUser(),
			$keys[20] => $this->getTasCanUpload(),
			$keys[21] => $this->getTasViewUpload(),
			$keys[22] => $this->getTasViewAdditionalDocumentation(),
			$keys[23] => $this->getTasCanCancel(),
			$keys[24] => $this->getTasOwnerApp(),
			$keys[25] => $this->getStgUid(),
			$keys[26] => $this->getTasCanPause(),
			$keys[27] => $this->getTasCanSendMessage(),
			$keys[28] => $this->getTasCanDeleteDocs(),
			$keys[29] => $this->getTasSelfService(),
			$keys[30] => $this->getTasStart(),
			$keys[31] => $this->getTasToLastUser(),
			$keys[32] => $this->getTasSendLastEmail(),
			$keys[33] => $this->getTasDerivation(),
			$keys[34] => $this->getTasPosx(),
			$keys[35] => $this->getTasPosy(),
			$keys[36] => $this->getTasWidth(),
			$keys[37] => $this->getTasHeight(),
			$keys[38] => $this->getTasColor(),
			$keys[39] => $this->getTasEvnUid(),
			$keys[40] => $this->getTasBoundary(),
			$keys[41] => $this->getTasDerivationScreenTpl(),
			$keys[42] => $this->getTasSelfserviceTimeout(),
			$keys[43] => $this->getTasSelfserviceTime(),
			$keys[44] => $this->getTasSelfserviceTimeUnit(),
			$keys[45] => $this->getTasSelfserviceTriggerUid(),
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
		$pos = TaskPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTasUid($value);
				break;
			case 2:
				$this->setTasType($value);
				break;
			case 3:
				$this->setTasDuration($value);
				break;
			case 4:
				$this->setTasDelayType($value);
				break;
			case 5:
				$this->setTasTemporizer($value);
				break;
			case 6:
				$this->setTasTypeDay($value);
				break;
			case 7:
				$this->setTasTimeunit($value);
				break;
			case 8:
				$this->setTasAlert($value);
				break;
			case 9:
				$this->setTasPriorityVariable($value);
				break;
			case 10:
				$this->setTasAssignType($value);
				break;
			case 11:
				$this->setTasAssignVariable($value);
				break;
			case 12:
				$this->setTasGroupVariable($value);
				break;
			case 13:
				$this->setTasMiInstanceVariable($value);
				break;
			case 14:
				$this->setTasMiCompleteVariable($value);
				break;
			case 15:
				$this->setTasAssignLocation($value);
				break;
			case 16:
				$this->setTasAssignLocationAdhoc($value);
				break;
			case 17:
				$this->setTasTransferFly($value);
				break;
			case 18:
				$this->setTasLastAssigned($value);
				break;
			case 19:
				$this->setTasUser($value);
				break;
			case 20:
				$this->setTasCanUpload($value);
				break;
			case 21:
				$this->setTasViewUpload($value);
				break;
			case 22:
				$this->setTasViewAdditionalDocumentation($value);
				break;
			case 23:
				$this->setTasCanCancel($value);
				break;
			case 24:
				$this->setTasOwnerApp($value);
				break;
			case 25:
				$this->setStgUid($value);
				break;
			case 26:
				$this->setTasCanPause($value);
				break;
			case 27:
				$this->setTasCanSendMessage($value);
				break;
			case 28:
				$this->setTasCanDeleteDocs($value);
				break;
			case 29:
				$this->setTasSelfService($value);
				break;
			case 30:
				$this->setTasStart($value);
				break;
			case 31:
				$this->setTasToLastUser($value);
				break;
			case 32:
				$this->setTasSendLastEmail($value);
				break;
			case 33:
				$this->setTasDerivation($value);
				break;
			case 34:
				$this->setTasPosx($value);
				break;
			case 35:
				$this->setTasPosy($value);
				break;
			case 36:
				$this->setTasWidth($value);
				break;
			case 37:
				$this->setTasHeight($value);
				break;
			case 38:
				$this->setTasColor($value);
				break;
			case 39:
				$this->setTasEvnUid($value);
				break;
			case 40:
				$this->setTasBoundary($value);
				break;
			case 41:
				$this->setTasDerivationScreenTpl($value);
				break;
			case 42:
				$this->setTasSelfserviceTimeout($value);
				break;
			case 43:
				$this->setTasSelfserviceTime($value);
				break;
			case 44:
				$this->setTasSelfserviceTimeUnit($value);
				break;
			case 45:
				$this->setTasSelfserviceTriggerUid($value);
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
		$keys = TaskPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setProUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTasUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTasType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTasDuration($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTasDelayType($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTasTemporizer($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setTasTypeDay($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTasTimeunit($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTasAlert($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTasPriorityVariable($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTasAssignType($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTasAssignVariable($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setTasGroupVariable($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setTasMiInstanceVariable($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setTasMiCompleteVariable($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTasAssignLocation($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTasAssignLocationAdhoc($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTasTransferFly($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setTasLastAssigned($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setTasUser($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setTasCanUpload($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setTasViewUpload($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setTasViewAdditionalDocumentation($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setTasCanCancel($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setTasOwnerApp($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setStgUid($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setTasCanPause($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setTasCanSendMessage($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setTasCanDeleteDocs($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setTasSelfService($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setTasStart($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setTasToLastUser($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setTasSendLastEmail($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setTasDerivation($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setTasPosx($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setTasPosy($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setTasWidth($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setTasHeight($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setTasColor($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setTasEvnUid($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setTasBoundary($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setTasDerivationScreenTpl($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setTasSelfserviceTimeout($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setTasSelfserviceTime($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setTasSelfserviceTimeUnit($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setTasSelfserviceTriggerUid($arr[$keys[45]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TaskPeer::DATABASE_NAME);

		if ($this->isColumnModified(TaskPeer::PRO_UID)) $criteria->add(TaskPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(TaskPeer::TAS_UID)) $criteria->add(TaskPeer::TAS_UID, $this->tas_uid);
		if ($this->isColumnModified(TaskPeer::TAS_TYPE)) $criteria->add(TaskPeer::TAS_TYPE, $this->tas_type);
		if ($this->isColumnModified(TaskPeer::TAS_DURATION)) $criteria->add(TaskPeer::TAS_DURATION, $this->tas_duration);
		if ($this->isColumnModified(TaskPeer::TAS_DELAY_TYPE)) $criteria->add(TaskPeer::TAS_DELAY_TYPE, $this->tas_delay_type);
		if ($this->isColumnModified(TaskPeer::TAS_TEMPORIZER)) $criteria->add(TaskPeer::TAS_TEMPORIZER, $this->tas_temporizer);
		if ($this->isColumnModified(TaskPeer::TAS_TYPE_DAY)) $criteria->add(TaskPeer::TAS_TYPE_DAY, $this->tas_type_day);
		if ($this->isColumnModified(TaskPeer::TAS_TIMEUNIT)) $criteria->add(TaskPeer::TAS_TIMEUNIT, $this->tas_timeunit);
		if ($this->isColumnModified(TaskPeer::TAS_ALERT)) $criteria->add(TaskPeer::TAS_ALERT, $this->tas_alert);
		if ($this->isColumnModified(TaskPeer::TAS_PRIORITY_VARIABLE)) $criteria->add(TaskPeer::TAS_PRIORITY_VARIABLE, $this->tas_priority_variable);
		if ($this->isColumnModified(TaskPeer::TAS_ASSIGN_TYPE)) $criteria->add(TaskPeer::TAS_ASSIGN_TYPE, $this->tas_assign_type);
		if ($this->isColumnModified(TaskPeer::TAS_ASSIGN_VARIABLE)) $criteria->add(TaskPeer::TAS_ASSIGN_VARIABLE, $this->tas_assign_variable);
		if ($this->isColumnModified(TaskPeer::TAS_GROUP_VARIABLE)) $criteria->add(TaskPeer::TAS_GROUP_VARIABLE, $this->tas_group_variable);
		if ($this->isColumnModified(TaskPeer::TAS_MI_INSTANCE_VARIABLE)) $criteria->add(TaskPeer::TAS_MI_INSTANCE_VARIABLE, $this->tas_mi_instance_variable);
		if ($this->isColumnModified(TaskPeer::TAS_MI_COMPLETE_VARIABLE)) $criteria->add(TaskPeer::TAS_MI_COMPLETE_VARIABLE, $this->tas_mi_complete_variable);
		if ($this->isColumnModified(TaskPeer::TAS_ASSIGN_LOCATION)) $criteria->add(TaskPeer::TAS_ASSIGN_LOCATION, $this->tas_assign_location);
		if ($this->isColumnModified(TaskPeer::TAS_ASSIGN_LOCATION_ADHOC)) $criteria->add(TaskPeer::TAS_ASSIGN_LOCATION_ADHOC, $this->tas_assign_location_adhoc);
		if ($this->isColumnModified(TaskPeer::TAS_TRANSFER_FLY)) $criteria->add(TaskPeer::TAS_TRANSFER_FLY, $this->tas_transfer_fly);
		if ($this->isColumnModified(TaskPeer::TAS_LAST_ASSIGNED)) $criteria->add(TaskPeer::TAS_LAST_ASSIGNED, $this->tas_last_assigned);
		if ($this->isColumnModified(TaskPeer::TAS_USER)) $criteria->add(TaskPeer::TAS_USER, $this->tas_user);
		if ($this->isColumnModified(TaskPeer::TAS_CAN_UPLOAD)) $criteria->add(TaskPeer::TAS_CAN_UPLOAD, $this->tas_can_upload);
		if ($this->isColumnModified(TaskPeer::TAS_VIEW_UPLOAD)) $criteria->add(TaskPeer::TAS_VIEW_UPLOAD, $this->tas_view_upload);
		if ($this->isColumnModified(TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION)) $criteria->add(TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION, $this->tas_view_additional_documentation);
		if ($this->isColumnModified(TaskPeer::TAS_CAN_CANCEL)) $criteria->add(TaskPeer::TAS_CAN_CANCEL, $this->tas_can_cancel);
		if ($this->isColumnModified(TaskPeer::TAS_OWNER_APP)) $criteria->add(TaskPeer::TAS_OWNER_APP, $this->tas_owner_app);
		if ($this->isColumnModified(TaskPeer::STG_UID)) $criteria->add(TaskPeer::STG_UID, $this->stg_uid);
		if ($this->isColumnModified(TaskPeer::TAS_CAN_PAUSE)) $criteria->add(TaskPeer::TAS_CAN_PAUSE, $this->tas_can_pause);
		if ($this->isColumnModified(TaskPeer::TAS_CAN_SEND_MESSAGE)) $criteria->add(TaskPeer::TAS_CAN_SEND_MESSAGE, $this->tas_can_send_message);
		if ($this->isColumnModified(TaskPeer::TAS_CAN_DELETE_DOCS)) $criteria->add(TaskPeer::TAS_CAN_DELETE_DOCS, $this->tas_can_delete_docs);
		if ($this->isColumnModified(TaskPeer::TAS_SELF_SERVICE)) $criteria->add(TaskPeer::TAS_SELF_SERVICE, $this->tas_self_service);
		if ($this->isColumnModified(TaskPeer::TAS_START)) $criteria->add(TaskPeer::TAS_START, $this->tas_start);
		if ($this->isColumnModified(TaskPeer::TAS_TO_LAST_USER)) $criteria->add(TaskPeer::TAS_TO_LAST_USER, $this->tas_to_last_user);
		if ($this->isColumnModified(TaskPeer::TAS_SEND_LAST_EMAIL)) $criteria->add(TaskPeer::TAS_SEND_LAST_EMAIL, $this->tas_send_last_email);
		if ($this->isColumnModified(TaskPeer::TAS_DERIVATION)) $criteria->add(TaskPeer::TAS_DERIVATION, $this->tas_derivation);
		if ($this->isColumnModified(TaskPeer::TAS_POSX)) $criteria->add(TaskPeer::TAS_POSX, $this->tas_posx);
		if ($this->isColumnModified(TaskPeer::TAS_POSY)) $criteria->add(TaskPeer::TAS_POSY, $this->tas_posy);
		if ($this->isColumnModified(TaskPeer::TAS_WIDTH)) $criteria->add(TaskPeer::TAS_WIDTH, $this->tas_width);
		if ($this->isColumnModified(TaskPeer::TAS_HEIGHT)) $criteria->add(TaskPeer::TAS_HEIGHT, $this->tas_height);
		if ($this->isColumnModified(TaskPeer::TAS_COLOR)) $criteria->add(TaskPeer::TAS_COLOR, $this->tas_color);
		if ($this->isColumnModified(TaskPeer::TAS_EVN_UID)) $criteria->add(TaskPeer::TAS_EVN_UID, $this->tas_evn_uid);
		if ($this->isColumnModified(TaskPeer::TAS_BOUNDARY)) $criteria->add(TaskPeer::TAS_BOUNDARY, $this->tas_boundary);
		if ($this->isColumnModified(TaskPeer::TAS_DERIVATION_SCREEN_TPL)) $criteria->add(TaskPeer::TAS_DERIVATION_SCREEN_TPL, $this->tas_derivation_screen_tpl);
		if ($this->isColumnModified(TaskPeer::TAS_SELFSERVICE_TIMEOUT)) $criteria->add(TaskPeer::TAS_SELFSERVICE_TIMEOUT, $this->tas_selfservice_timeout);
		if ($this->isColumnModified(TaskPeer::TAS_SELFSERVICE_TIME)) $criteria->add(TaskPeer::TAS_SELFSERVICE_TIME, $this->tas_selfservice_time);
		if ($this->isColumnModified(TaskPeer::TAS_SELFSERVICE_TIME_UNIT)) $criteria->add(TaskPeer::TAS_SELFSERVICE_TIME_UNIT, $this->tas_selfservice_time_unit);
		if ($this->isColumnModified(TaskPeer::TAS_SELFSERVICE_TRIGGER_UID)) $criteria->add(TaskPeer::TAS_SELFSERVICE_TRIGGER_UID, $this->tas_selfservice_trigger_uid);

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
		$criteria = new Criteria(TaskPeer::DATABASE_NAME);
		$criteria->add(TaskPeer::TAS_UID, $this->tas_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getTasUid();
	}

	/**
	 * Generic method to set the primary key (tas_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setTasUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getTasUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Task (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setProUid($this->getProUid());
		$copyObj->setTasUid($this->getTasUid());
		$copyObj->setTasType($this->getTasType());
		$copyObj->setTasDuration($this->getTasDuration());
		$copyObj->setTasDelayType($this->getTasDelayType());
		$copyObj->setTasTemporizer($this->getTasTemporizer());
		$copyObj->setTasTypeDay($this->getTasTypeDay());
		$copyObj->setTasTimeunit($this->getTasTimeunit());
		$copyObj->setTasAlert($this->getTasAlert());
		$copyObj->setTasPriorityVariable($this->getTasPriorityVariable());
		$copyObj->setTasAssignType($this->getTasAssignType());
		$copyObj->setTasAssignVariable($this->getTasAssignVariable());
		$copyObj->setTasGroupVariable($this->getTasGroupVariable());
		$copyObj->setTasMiInstanceVariable($this->getTasMiInstanceVariable());
		$copyObj->setTasMiCompleteVariable($this->getTasMiCompleteVariable());
		$copyObj->setTasAssignLocation($this->getTasAssignLocation());
		$copyObj->setTasAssignLocationAdhoc($this->getTasAssignLocationAdhoc());
		$copyObj->setTasTransferFly($this->getTasTransferFly());
		$copyObj->setTasLastAssigned($this->getTasLastAssigned());
		$copyObj->setTasUser($this->getTasUser());
		$copyObj->setTasCanUpload($this->getTasCanUpload());
		$copyObj->setTasViewUpload($this->getTasViewUpload());
		$copyObj->setTasViewAdditionalDocumentation($this->getTasViewAdditionalDocumentation());
		$copyObj->setTasCanCancel($this->getTasCanCancel());
		$copyObj->setTasOwnerApp($this->getTasOwnerApp());
		$copyObj->setStgUid($this->getStgUid());
		$copyObj->setTasCanPause($this->getTasCanPause());
		$copyObj->setTasCanSendMessage($this->getTasCanSendMessage());
		$copyObj->setTasCanDeleteDocs($this->getTasCanDeleteDocs());
		$copyObj->setTasSelfService($this->getTasSelfService());
		$copyObj->setTasStart($this->getTasStart());
		$copyObj->setTasToLastUser($this->getTasToLastUser());
		$copyObj->setTasSendLastEmail($this->getTasSendLastEmail());
		$copyObj->setTasDerivation($this->getTasDerivation());
		$copyObj->setTasPosx($this->getTasPosx());
		$copyObj->setTasPosy($this->getTasPosy());
		$copyObj->setTasWidth($this->getTasWidth());
		$copyObj->setTasHeight($this->getTasHeight());
		$copyObj->setTasColor($this->getTasColor());
		$copyObj->setTasEvnUid($this->getTasEvnUid());
		$copyObj->setTasBoundary($this->getTasBoundary());
		$copyObj->setTasDerivationScreenTpl($this->getTasDerivationScreenTpl());
		$copyObj->setTasSelfserviceTimeout($this->getTasSelfserviceTimeout());
		$copyObj->setTasSelfserviceTime($this->getTasSelfserviceTime());
		$copyObj->setTasSelfserviceTimeUnit($this->getTasSelfserviceTimeUnit());
		$copyObj->setTasSelfserviceTriggerUid($this->getTasSelfserviceTriggerUid());
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
	 * @return     Task Clone of current object.
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
	 * @return     TaskPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TaskPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->pro_uid = null;
		$this->tas_uid = null;
		$this->tas_type = null;
		$this->tas_duration = null;
		$this->tas_delay_type = null;
		$this->tas_temporizer = null;
		$this->tas_type_day = null;
		$this->tas_timeunit = null;
		$this->tas_alert = null;
		$this->tas_priority_variable = null;
		$this->tas_assign_type = null;
		$this->tas_assign_variable = null;
		$this->tas_group_variable = null;
		$this->tas_mi_instance_variable = null;
		$this->tas_mi_complete_variable = null;
		$this->tas_assign_location = null;
		$this->tas_assign_location_adhoc = null;
		$this->tas_transfer_fly = null;
		$this->tas_last_assigned = null;
		$this->tas_user = null;
		$this->tas_can_upload = null;
		$this->tas_view_upload = null;
		$this->tas_view_additional_documentation = null;
		$this->tas_can_cancel = null;
		$this->tas_owner_app = null;
		$this->stg_uid = null;
		$this->tas_can_pause = null;
		$this->tas_can_send_message = null;
		$this->tas_can_delete_docs = null;
		$this->tas_self_service = null;
		$this->tas_start = null;
		$this->tas_to_last_user = null;
		$this->tas_send_last_email = null;
		$this->tas_derivation = null;
		$this->tas_posx = null;
		$this->tas_posy = null;
		$this->tas_width = null;
		$this->tas_height = null;
		$this->tas_color = null;
		$this->tas_evn_uid = null;
		$this->tas_boundary = null;
		$this->tas_derivation_screen_tpl = null;
		$this->tas_selfservice_timeout = null;
		$this->tas_selfservice_time = null;
		$this->tas_selfservice_time_unit = null;
		$this->tas_selfservice_trigger_uid = null;
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
		return (string) $this->exportTo(TaskPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseTask
