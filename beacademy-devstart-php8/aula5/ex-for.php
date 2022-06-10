<select>
  <option selected> -- Selecione o ano -- </option>
  <?php
  
    for ($ano = 2022; $ano >= 1900; $ano++){
      echo "<option>{$ano}</option>";
    }

  ?>
</select>
