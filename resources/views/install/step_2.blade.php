<form>
  <label for="hostname">Database Hostname:</label>
  <input type="text" id="hostname" name="hostname" required>

  <label for="database_name">Database Name:</label>
  <input type="text" id="database_name" name="database_name" required>

  <label for="username">Database Username:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Database Password:</label>
  <input type="password" id="password" name="password">

  <button type="button" id="next" disabled>Next</button>
</form>

<script>
  const updateButtonState = () => {
    const hostname = document.getElementById('hostname').value;
    const databaseName = document.getElementById('database_name').value;
    const username = document.getElementById('username').value;
    const nextButton = document.getElementById('next');

    nextButton.disabled = !(hostname && databaseName && username);
  };

  document.getElementById('hostname').addEventListener('input', updateButtonState);
  document.getElementById('database_name').addEventListener('input', updateButtonState);
  document.getElementById('username').addEventListener('input', updateButtonState);
</script>