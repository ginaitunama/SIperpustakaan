






























































































































































































	
		
							$array[$k] = $this->prep_for_form($v);
							$post_ref =& $post_ref[$val];
							$this->_field_data[$row['field']]['postdata'] = (is_bool($result)) ? $postdata : $result;
							$this->_field_data[$row['field']]['postdata'][$cycles] = (is_bool($result)) ? $postdata : $result;
						$_POST[$row['field']] = $this->prep_for_form($row['postdata']);
						$array = array();
						$line = 'The field was not set';
						$line = 'Unable to access an error message corresponding to your field name.';
						$post_ref = $array;
						$post_ref = $this->prep_for_form($row['postdata']);
						$post_ref =& $post_ref[current($row['keys'])];
						$result = $rule($postdata);
						else
						foreach ($row['keys'] as $val)
						foreach ($row['postdata'] as $k => $v)
						if ($_in_array == TRUE)
						log_message('debug', "Unable to find validation rule: ".$rule);
						{
						{
						{
						{
						}
						}
						}
						}
					$array = $this->_reduce_array($array[$keys[$i]], $keys, ($i+1));
					$indexes[] = $matches['1'][$i];
					$line = $this->_error_messages[$rule];
					$line = $this->_error_messages[$type];
					$param = $this->_translate_fieldname($this->_field_data[$param]['label']);
					$post_ref =& $_POST;
					$this->_error_array[$row['field']] = $message;
					$this->_error_array[$row['field']] = $message;
					$this->_field_data[$field]['postdata'] = $_POST[$field];
					$this->_field_data[$row['field']]['postdata'] = (is_bool($result)) ? $postdata : $result;
					$this->_field_data[$row['field']]['postdata'] = (is_bool($result)) ? $postdata : $result;
					$this->_field_data[$row['field']]['postdata'][$cycles] = (is_bool($result)) ? $postdata : $result;
					$this->_field_data[$row['field']]['postdata'][$cycles] = (is_bool($result)) ? $postdata : $result;
					// before we assign values, make a reference to the right POST key
					// If our own wrapper function doesn't exist we see if a native PHP function does.
					// start with a reference
					// Users can use any native PHP function call that has one param.
					continue;
					continue;
					continue;
					continue;
					continue;
					else
					else
					else
					if (count($row['keys']) == 1)
					if (FALSE === ($line = $this->CI->lang->line($rule)))
					if (FALSE === ($line = $this->CI->lang->line($type)))
					if (function_exists($rule))
					if (is_array($row['postdata']))
					if (isset($_POST[$row['field']]))
					return NULL;
					{
					{
					{
					{
					{
					{
					{
					{
					{
					}
					}
					}
					}
					}
					}
					}
					}
					}
				$_in_array = TRUE;
				$callback = TRUE;
				$callback = TRUE;
				$cycles++;
				$data[$key] = $this->prep_for_form($val);
				$label = ( ! isset($row['label'])) ? $row['field'] : $row['label'];
				$message = sprintf($line, $this->_translate_fieldname($row['label']));
				$message = sprintf($line, $this->_translate_fieldname($row['label']), $param);
				$param	= $match[2];
				$postdata = $this->_field_data[$row['field']]['postdata'];
				$postdata = $this->_field_data[$row['field']]['postdata'][$cycles];
				$result = $this->$rule($postdata, $param);
				$result = $this->CI->$rule($postdata, $param);
				$rule	= $match[1];
				$rule = substr($rule, 9);
				$rules = (array('1' => $match[1]));
				$str .= $prefix.$val.$suffix."\n";
				$this->_execute($row, $rules, $val, $cycles);
				$this->_field_data[$field]['postdata'] = $this->_reduce_array($_POST, $row['keys']);
				$this->_field_data[$row['field']]['error'] = $message;
				$this->_field_data[$row['field']]['error'] = $message;
				$this->set_rules($row['field'], $label, $row['rules']);
				$this->set_rules($this->_config_rules);
				$this->set_rules($this->_config_rules[$uri]);
				$type = (in_array('required', $rules)) ? 'required' : 'isset';
				// associated with this cycle we'll bail out
				// Build the error message
				// Build the error message
				// Here we go!
				// Houston, we have a problem...
				// If the field isn't required and we just processed a callback we'll move on...
				// If the field label wasn't passed we use the field name
				// Is the parameter we are inserting into the error message the name
				// of another field?  If so we need to grab its "field label"
				// Re-assign the result to the master data array
				// Run the function and grab the result
				// Save the error message
				// Save the error message
				// Set the message type
				// We shouldn't need this safety, but just in case there isn't an array index
				else
				else
				else
				else
				else
				else
				if ( ! in_array('required', $rules, TRUE) AND $result !== FALSE)
				if ( ! isset($row['field']) OR ! isset($row['rules']))
				if ( ! isset($this->_error_array[$row['field']]))
				if ( ! isset($this->_error_array[$row['field']]))
				if ( ! isset($this->_error_messages[$rule]))
				if ( ! isset($this->_error_messages[$type]))
				if ( ! isset($this->_field_data[$row['field']]['postdata'][$cycles]))
				if ( ! method_exists($this, $rule))
				if ( ! method_exists($this->CI, $rule))
				if ($_in_array == TRUE)
				if ($_in_array == TRUE)
				if ($matches['1'][$i] != '')
				if ($row['is_array'] == FALSE)
				if (isset($_POST[$field]) AND $_POST[$field] != "")
				if (isset($array[$keys[$i]]))
				if (isset($this->_field_data[$param]) AND isset($this->_field_data[$param]['label']))
				log_message('debug', "Unable to find validation rules");
				return $array;
				return $line;
				return ' checked="checked"';
				return ' checked="checked"';
				return ' selected="selected"';
				return '';
				return '';
				return '';
				return '';
				return '';
				return '';
				return FALSE;
				return FALSE;
				return FALSE;
				return;
				return;
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				{
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}
			$_in_array = FALSE;
			$callback = FALSE;
			$indexes	= array();
			$indexes[] = current($x);
			$is_array	= FALSE;
			$is_array = TRUE;
			$lang = array($lang => $val);
			$line = substr($fieldname, 5);
			$param = FALSE;
			$prefix = $this->_error_prefix;
			$prefix = $this->_error_prefix;
			$str = 'http://'.$str;
			$suffix = $this->_error_suffix;
			$suffix = $this->_error_suffix;
			$this->_execute($row, explode('|', $row['rules']), $this->_field_data[$field]['postdata']);
			$this->_safe_form_data = TRUE;
			$uri = ($group == '') ? trim($this->CI->uri->ruri_string(), '/') : $group;
			$x = explode('[', $field);
			'error'				=> ''
			'field'				=> $field,
			'is_array'			=> $is_array,
			'keys'				=> $indexes,
			'label'				=> $label,
			'postdata'			=> NULL,
			'rules'				=> $rules,
			// --------------------------------------------------------------------
			// Before we bail out, does the rule contain a callback?
			// Call the function that corresponds to the rule
			// Depending on whether the field name is an array or a string will determine where we get it from.
			// Did the rule test negatively?  If so, grab the error.
			// each cycle of the loop is dealing with the processed data from the last cycle
			// Fetch the data from the corresponding $_POST array and cache it in the _field_data array.
			// Grab the variable
			// Is the rule a callback?
			// Is there a validation rule for the particular URI being accessed?
			// No validation rules?  We're done...
			// Note: Due to a bug in current() that affects some versions
			// of PHP we can not pass function call directly into it
			// Rules can contain a parameter: max_length[5]
			// Strip the parameter (if exists) from the rule
			// We set the $postdata variable with the current data in our master array so that
			// We're we able to set the rules correctly?
			// Were we able to translate the field name?  If not we use $line
			else
			else
			else
			else
			else
			else
			for ($i = 0; $i < count($matches['0']); $i++)
			foreach ($data as $key => $val)
			foreach ($field as $row)
			foreach ($postdata as $key => $val)
			if ( ! in_array($value, $field))
			if ( ! in_array($value, $field))
			if ( ! in_array($value, $field))
			if ( ! is_null($row['postdata']))
			if ($callback === TRUE)
			if ($default === TRUE AND count($this->_field_data) === 0)
			if ($default === TRUE AND count($this->_field_data) === 0)
			if ($default === TRUE AND count($this->_field_data) === 0)
			if ($result === FALSE)
			if ($row['is_array'] == TRUE AND is_array($this->_field_data[$row['field']]['postdata']))
			if ($row['is_array'] == TRUE)
			if ($uri != '' AND isset($this->_config_rules[$uri]))
			if ($val != '')
			if (($field == '' OR $value == '') OR ($field != $value))
			if (($field == '' OR $value == '') OR ($field != $value))
			if (($field == '' OR $value == '') OR ($field != $value))
			if (count($this->_config_rules) == 0)
			if (count($this->_field_data) == 0)
			if (FALSE === ($fieldname = $this->CI->lang->line($line)))
			if (in_array('isset', $rules, TRUE) OR in_array('required', $rules))
			if (isset($keys[$i]))
			if (preg_match("/(.*?)\[(.*)\]/", $rule, $match))
			if (preg_match("/(callback_\w+(\[.*?\])?)/", implode(' ', $rules), $match))
			if (substr($rule, 0, 9) == 'callback_')
			if (trim($email) != '' && $this->valid_email(trim($email)) === FALSE)
			mb_internal_encoding($this->CI->config->item('charset'));
			return $data;
			return $data;
			return $default;
			return $this->valid_email(trim($str));
			return $this;
			return $this;
			return $this;
			return '';
			return '';
			return '';
			return '';
			return '';
			return '';
			return ( ! empty($str));
			return (mb_strlen($str) != $val) ? FALSE : TRUE;
			return (mb_strlen($str) < $val) ? FALSE : TRUE;
			return (mb_strlen($str) > $val) ? FALSE : TRUE;
			return (trim($str) == '') ? FALSE : TRUE;
			return array_shift($this->_field_data[$field]['postdata']);
			return FALSE;
			return FALSE;
			return FALSE;
			return FALSE;
			return FALSE;
			return FALSE;
			return FALSE;
			return FALSE;
			return FALSE;
			return FALSE;
			return TRUE;
			return;
			return;
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			{
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
			}
		$callback = FALSE;
		$field = $_POST[$field];
		$field = $this->_field_data[$field]['postdata'];
		$field = $this->_field_data[$field]['postdata'];
		$field = $this->_field_data[$field]['postdata'];
		$label = ($label == '') ? $field : $label;
		$query = $this->CI->db->limit(1)->get_where($table, array($field => $str));
		$str = '';
		$this->_config_rules = $rules;
		$this->_error_messages = array_merge($this->_error_messages, $lang);
		$this->_error_prefix = $prefix;
		$this->_error_suffix = $suffix;
		$this->_field_data[$field] = array(
		$this->_reset_post_array();
		$this->CI =& get_instance();
		$this->CI->lang->load('form_validation');
		$this->CI->load->helper('form');
		$total_errors = count($this->_error_array);
		);
		//     E.g: form_input('name[]', set_value('name[]');
		// --------------------------------------------------------------------
		// --------------------------------------------------------------------
		// --------------------------------------------------------------------
		// Automatically load the form helper
		// Build our master array
		// corresponding $_POST item and test for errors
		// Cycle through each rule and run it
		// Cycle through the rules for each field, match the
		// Did we end up with any errors?
		// Do we even have any data to process?  Mm?
		// Do we need to translate the field name?
		// Does the _field_data array containing the validation rules exist?
		// Generate the error string
		// If an array was passed via the first parameter instead of indidual string
		// If not, we look to see if they were assigned via a config file
		// If the $_POST data is an array we will run a recursive call
		// If the data is an array output them one at a time.
		// If the field is blank, but NOT required, no further tests are necessary
		// If the field label wasn't passed we use the field name
		// into its components so that we can fetch the corresponding POST data later
		// Is the field name an array?  We test for the existence of a bracket "[" in
		// Isset Test. Typically this rule will only apply to checkboxes.
		// Load the language file containing error messages
		// No errors, validation passes!
		// No errrors, validation passes!
		// No fields? Nothing to do...
		// No reason to set rules if we have no POST data
		// Now we need to re-set the POST data with the new, processed data
		// Set the character encoding in MB.
		// the field name to determine this.  If it is an array, we break it apart
		// Validation fails
		// Validation rules can be stored in a config file.
		// values we cycle through it and recursively call this function.
		// We look for the prefix lang: to determine this
		else
		else
		else
		else
		else
		foreach ($rules As $rule)
		foreach ($this->_error_array as $val)
		foreach ($this->_field_data as $field => $row)
		foreach ($this->_field_data as $field => $row)
		foreach (explode(',', $str) as $email)
		if ( ! in_array('required', $rules) AND is_null($postdata))
		if ( ! is_array($lang))
		if ( ! is_array($str))
		if ( ! is_numeric($str))
		if ( ! is_numeric($str))
		if ( ! is_string($field) OR  ! is_string($rules) OR $field == '')
		if ( ! isset($_POST[$field]))
		if ( ! isset($this->_field_data[$field]) OR ! isset($this->_field_data[$field]['postdata']))
		if ( ! isset($this->_field_data[$field]) OR ! isset($this->_field_data[$field]['postdata']))
		if ( ! isset($this->_field_data[$field]) OR ! isset($this->_field_data[$field]['postdata']))
		if ( ! isset($this->_field_data[$field]))
		if ( ! isset($this->_field_data[$field]['error']) OR $this->_field_data[$field]['error'] == '')
		if ( ! preg_match( '/^[0-9]+$/', $str))
		if ( ! preg_match($regex, $str))
		if ($prefix == '')
		if ($prefix == '')
		if ($str == 'http://' OR $str == '')
		if ($str == 0)
		if ($suffix == '')
		if ($suffix == '')
		if ($this->_safe_form_data == FALSE OR $data === '')
		if ($total_errors == 0)
		if ($total_errors > 0)
		if (count($_POST) == 0)
		if (count($_POST) == 0)
		if (count($this->_error_array) === 0)
		if (count($this->_field_data) == 0)
		if (function_exists('mb_internal_encoding'))
		if (function_exists('mb_strlen'))
		if (function_exists('mb_strlen'))
		if (function_exists('mb_strlen'))
		if (is_array($array))
		if (is_array($data))
		if (is_array($field))
		if (is_array($field))
		if (is_array($field))
		if (is_array($field))
		if (is_array($postdata))
		if (is_array($this->_field_data[$field]['postdata']))
		if (is_null($postdata) AND $callback == FALSE)
		if (preg_match("/[^0-9]/", $val))
		if (preg_match("/[^0-9]/", $val))
		if (preg_match("/[^0-9]/", $val))
		if (strpos($field, '[') !== FALSE AND preg_match_all('/\[(.*?)\]/', $field, $matches))
		if (strpos($str, ',') === FALSE)
		if (substr($fieldname, 0, 5) == 'lang:')
		if (substr($str, 0, 7) != 'http://' && substr($str, 0, 8) != 'https://')
		list($table, $field)=explode('.', $field);
		log_message('debug', "Form Validation Class Initialized");
		return  TRUE;
		return $array;
		return $fieldname;
		return $prefix.$this->_field_data[$field]['error'].$suffix;
		return $query->num_rows() === 0;
		return $str < $max;
		return $str > $min;
		return $str;
		return $str;
		return $this->_field_data[$field]['postdata'];
		return $this->CI->input->strip_image_tags($str);
		return $this->CI->input->valid_ip($ip, $which);
		return $this->CI->security->xss_clean($str);
		return $this;
		return $this;
		return $this;
		return ' checked="checked"';
		return ' checked="checked"';
		return ' selected="selected"';
		return ( ! is_numeric($str)) ? FALSE : TRUE;
		return ( ! preg_match("/^([-a-z0-9_-])+$/i", $str)) ? FALSE : TRUE;
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
		return ( ! preg_match("/^([a-z0-9])+$/i", $str)) ? FALSE : TRUE;
		return ( ! preg_match("/^([a-z])+$/i", $str)) ? FALSE : TRUE;
		return ($str !== $field) ? FALSE : TRUE;
		return (bool) ! preg_match('/[^a-zA-Z0-9\/\+=]/', $str);
		return (bool) preg_match( '/^[0-9]+$/', $str);
		return (bool) preg_match('/^[\-+]?[0-9]+$/', $str);
		return (bool) preg_match('/^[\-+]?[0-9]+\.[0-9]+$/', $str);
		return (bool)preg_match( '/^[\-+]?[0-9]*\.?[0-9]+$/', $str);
		return (strlen($str) != $val) ? FALSE : TRUE;
		return (strlen($str) < $val) ? FALSE : TRUE;
		return (strlen($str) > $val) ? FALSE : TRUE;
		return FALSE;
		return str_replace(array("'", '"', '<', '>'), array("&#39;", "&quot;", '&lt;', '&gt;'), stripslashes($data));
		return str_replace(array('<?php', '<?PHP', '<?', '?>'),  array('&lt;?php', '&lt;?PHP', '&lt;?', '?&gt;'), $str);
		return TRUE;
		return TRUE;
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		{
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 * @access	private
	 * @access	private
	 * @access	private
	 * @access	private
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @access	public
	 * @param	array
	 * @param	array
	 * @param	array
	 * @param	array
	 * @param	field
	 * @param	field
	 * @param	integer
	 * @param	integer
	 * @param	mixed
	 * @param	mixed
	 * @param	regex
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string
	 * @param	string	the field name
	 * @param	string	the field name
	 * @param	string	the field name
	 * @param	string "ipv4" or "ipv6" to validate a specific ip format
	 * @param	value
	 * @param	value
	 * @param	value
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	bool
	 * @return	mixed
	 * @return	mixed
	 * @return	null
	 * @return	str
	 * @return	string
	 * @return	string
	 * @return	string
	 * @return	string
	 * @return	string
	 * @return	string
	 * @return	string
	 * @return	string
	 * @return	string
	 * @return	string
	 * @return	string
	 * @return	void
	 * @return	void
	 * @return	void
	 * @return	void
	 * Alpha
	 * Alpha-numeric
	 * Alpha-numeric with underscores and dashes
	 * as defined by RFC 2045 http://www.faqs.org/rfcs/rfc2045
	 * Constructor
	 * Convert PHP tags to entities
	 * Decimal number
	 * Enables checkboxes to be set to the value the user
	 * Enables pull-down lists to be set to the value the user
	 * Enables radio buttons to be set to the value the user
	 * Error String
	 * Exact Length
	 * Executes the Validation routines
	 * Get Error Message
	 * Get the value from a form
	 * Gets the error message associated with a particular field
	 * Greather than
	 * Integer
	 * Is a Natural number  (0,1,2,3, etc.)
	 * Is a Natural number, but not a zero  (1,2,3, etc.)
	 * Is Numeric
	 * Less than
	 * Lets users set their own error messages on the fly.  Note:  The key
	 * Match one field to another
	 * Match one field to another
	 * Max Length
	 * Minimum Length
	 * name has to match the  function name that it corresponds to.
	 * Numeric
	 * Performs a Regular Expression match test.
	 * Permits a prefix/suffix to be added to each error message
	 * Permits you to repopulate a form field with the value it was submitted
	 * Prep data for form
	 * Prep URL
	 * Re-populate the _POST array with our finalized and processed data
	 * Required
	 * Returns the error messages as a string, wrapped in the error delimiters
	 * rules as input, validates the info, and stores it
	 * Run the Validator
	 * selected in the event of an error
	 * selected in the event of an error
	 * selected in the event of an error
	 * Set Checkbox
	 * Set Error Message
	 * Set Radio
	 * Set Rules
	 * Set Select
	 * Set The Error Delimiter
	 * Special characters are converted.
	 * Strip Image Tags
	 * Tests a string for characters outside of the Base64 alphabet
	 * This function allows HTML to be safely shown in a form.
	 * This function does all the work.
	 * This function takes an array of field names and validation
	 * Translate a field name
	 * Traverse a multidimensional $_POST array index until the data is found
	 * Valid Base64
	 * Valid Email
	 * Valid Emails
	 * Validate IP Address
	 * with, or, if that value doesn't exist, with the default
	 * XSS Clean
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	 */
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	/**
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	protected $_config_rules		= array();
	protected $_error_array			= array();
	protected $_error_messages		= array();
	protected $_error_prefix		= '<p>';
	protected $_error_suffix		= '</p>';
	protected $_field_data			= array();
	protected $_safe_form_data		= FALSE;
	protected $CI;
	protected $error_string			= '';
	protected function _execute($row, $rules, $postdata = NULL, $cycles = 0)
	protected function _reduce_array($array, $keys, $i = 0)
	protected function _reset_post_array()
	protected function _translate_fieldname($fieldname)
	public function __construct($rules = array())
	public function alpha($str)
	public function alpha_dash($str)
	public function alpha_numeric($str)
	public function decimal($str)
	public function encode_php_tags($str)
	public function error($field = '', $prefix = '', $suffix = '')
	public function error_string($prefix = '', $suffix = '')
	public function exact_length($str, $val)
	public function greater_than($str, $min)
	public function integer($str)
	public function is_natural($str)
	public function is_natural_no_zero($str)
	public function is_numeric($str)
	public function is_unique($str, $field)
	public function less_than($str, $max)
	public function matches($str, $field)
	public function max_length($str, $val)
	public function min_length($str, $val)
	public function numeric($str)
	public function prep_for_form($data = '')
	public function prep_url($str = '')
	public function regex_match($str, $regex)
	public function required($str)
	public function run($group = '')
	public function set_checkbox($field = '', $value = '', $default = FALSE)
	public function set_error_delimiters($prefix = '<p>', $suffix = '</p>')
	public function set_message($lang, $val = '')
	public function set_radio($field = '', $value = '', $default = FALSE)
	public function set_rules($field, $label = '', $rules = '')
	public function set_select($field = '', $value = '', $default = FALSE)
	public function set_value($field = '', $default = '')
	public function strip_image_tags($str)
	public function valid_base64($str)
	public function valid_email($str)
	public function valid_emails($str)
	public function valid_ip($ip, $which = '')
	public function xss_clean($str)
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	{
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
    }
 *
 *
 *
 * @author		ExpressionEngine Dev Team
 * @author		ExpressionEngine Dev Team
 * @category	Validation
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @filesource
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @link		http://codeigniter.com/user_guide/libraries/form_validation.html
 * @package		CodeIgniter
 * @package		CodeIgniter
 * @since		Version 1.0
 * @subpackage	Libraries
 * An open source application development framework for PHP 5.1.6 or newer
 * CodeIgniter
 * Form Validation Class
 */
 */
/* End of file Form_validation.php */
/* Location: ./system/libraries/Form_validation.php */
/**
/**
// ------------------------------------------------------------------------
// END Form Validation Class
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CI_Form_validation {
}