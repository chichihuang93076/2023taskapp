  <div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
  </div>

  <div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="<?= old('email', $user->email) ?>">
  </div>

  <div>
    <label for="password">Password</label>
    <input type="password" name="password">
    <?php if ($user->id): ?>
    <p>Leave blank to kepp existing password</p>
    <?php endif; ?>
  </div>

  <div>
    <label for="password">Repeat password</label>
    <input type="password" name="password_confirmation">
  </div>