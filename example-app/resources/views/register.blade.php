<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru!</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="Other" required>
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label><br>
        <select id="nationality" name="nationality" required>
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
            <option value="Thailand">Thailand</option>
            <option value="Philippines">Philippines</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" id="bahasa_indonesia" name="languages[]" value="Bahasa Indonesia">
        <label for="bahasa_indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="languages[]" value="English">
        <label for="english">English</label><br>
        <input type="checkbox" id="other_language" name="languages[]" value="Other">
        <label for="other_language">Other</label><br><br>

        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>