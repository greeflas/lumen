<?php
/**
 * View file for secret controller.
 * @see \App\Http\Controllers\SecretController
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
?>

<form action="<?= route('secret') ?>" method="get">
    <h3>Are you 18 years old?</h3>
    <div>
        <input type="checkbox" name="age" id="age">
        <label for="age">Yes</label>
    </div>
    <button type="submit">Send</button>
</form>
