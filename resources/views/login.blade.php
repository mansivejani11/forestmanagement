<!DOCTYPE html>
<html>

<head>
    <title>HTML Login Form</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            line-height: 1.5;
            min-height: 100vh;
            background: #f3f3f3;
            flex-direction: column;
            margin: 0;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 10px 20px;
            transition: transform 0.2s;
            width: 500px;
            text-align: center;
        }

        h1 {
            color: #008000;
        }

        label {
            display: block;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 5px;
            text-align: left;
            color: #555;
            font-weight: bold;
        }

        input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            margin-bottom: 15px;
            border: none;
            color: white;
            cursor: pointer;
            background-color: #008000;
            width: 100%;
            font-size: 16px;
        }

        .wrap {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 400px;
            border-radius: 10px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="main">
        <h1>Login Form</h1>
        <form method="post" action="{{ route('login-process') }}">
            @csrf
            <label for="first">
                Username:
            </label>
            <input type="text" id="first" name="first" placeholder="Enter your Username" required>

            <label for="password">
                Password:
            </label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>

            <div class="wrap">
                <button type="submit">Submit</button>
            </div>
        </form>

        <button type="button" id="forgot-password-btn">Forget your password?</button>
    </div>

    <!-- Modal for Forgot Password -->
    <div id="forgot-password-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Reset Password</h2>
            <form method="post" action="{{ route('password.email') }}">
                @csrf
                <label for="email">Enter your email address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Send Password Reset Link</button>
            </form>
        </div>
    </div>

    <script>
        // Get modal element
        var modal = document.getElementById('forgot-password-modal');
        var btn = document.getElementById('forgot-password-btn');
        var span = document.getElementsByClassName('close')[0];

        // Open modal when 'Forget your password?' is clicked
        btn.onclick = function() {
            modal.style.display = 'block';
        }

        // Close modal when the user clicks on the close button (x)
        span.onclick = function() {
            modal.style.display = 'none';
        }

        // Close modal if the user clicks outside the modal content
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>

</html>
