<?php echo $this->fetch('library/user_header.lbi'); ?>
<form action="<?php echo url('user/add_address');?>" method="post" name="theForm" onsubmit="return checkConsignee(this)">
  <div class="ect-bg-colorf flow-consignee">
    <ul class="o-info">
      <li>
        <div class="input-text"><b class="pull-left"><?php echo $this->_var['lang']['consignee_name']; ?>：</b><span>
          <input name="consignee" placeholder="<?php echo $this->_var['lang']['consignee_name']; ?><?php echo $this->_var['lang']['require_field']; ?>" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" />
          </span></div>
      </li>
      <li>
        <div class="input-text"><b class="pull-left"><?php echo $this->_var['lang']['mobile']; ?>：</b><span>
          <input placeholder="<?php echo $this->_var['lang']['mobile']; ?><?php echo $this->_var['lang']['require_field']; ?>" name="mobile" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" />
          </span></div>
      </li>
      <li style="display:none">
        <div class="input-text"><b class="pull-left"><?php echo $this->_var['lang']['city_district']; ?>：</b><span>
        <select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')">
          <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
          <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
          <option value="<?php echo $this->_var['country']['region_id']; ?>"<?php if ($this->_var['country']['region_id'] == '1'): ?> selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
      </div>
    </li>
    <li>
        <div class="input-text"><b class="pull-left">省/直辖市：</b><span>
        <select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')">
          <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
          <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
          <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
      </div>
    </li>
    <li>
        <div class="input-text"><b class="pull-left">城市：</b><span>
        <select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')">
          <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
          <?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
          <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
      </div>
    </li>
    <li id="selDistricts_<?php echo $this->_var['sn']; ?>_box" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="display:none"<?php endif; ?>>
        <div class="input-text"><b class="pull-left">区/县：</b><span>
        <select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>">
          <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
          <?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
          <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select
          >
      </div>
    </li>
      <li class="input-text"><b class="pull-left"><?php echo $this->_var['lang']['detailed_address']; ?></b>
        <textarea name="address" placeholder="<?php echo $this->_var['lang']['detailed_address']; ?><?php echo $this->_var['lang']['require_field']; ?>" type="text"><?php echo htmlspecialchars($this->_var['consignee']['address']); ?></textarea>
      </li>
    </ul>
  </div>
  <div class="two-btn ect-padding-tb ect-padding-lr ect-margin-tb text-center">
    <input type="submit" name="submit"  class="btn btn-info ect-bg-colory"  value="<?php echo $this->_var['lang']['add_address']; ?>"/>
    <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
  </div>
</form>
</div>
<?php echo $this->fetch('library/search.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript" src="__PUBLIC__/js/region.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/shopping_flow.js"></script> 
<script type="text/javascript">
	region.isAdmin = false;
	<?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	onload = function() {
	      if (!document.all)
	      {
	        document.forms['theForm'].reset();
	      }
	}
	
</script>
</body></html>