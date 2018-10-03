<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post a job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <fieldset style="width:100px; height:auto; margin:200px 0px 0px 500px;">
        <form method="POST" action="{{ route('jobDesc') }}">
            {{csrf_field()}}
            <table>
                <tbody>
                    <tr>
                        <td><label>E-mail:</label></td>
                        <td>
                            <input type="text" name="email" />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="job">Job title:</label></td>
                        <td>
                            <input id="job" type="text" name="jTitle"  />
                        </td>
                    </tr>
                    <tr>
                        <td>Skill set: </td>
                        <td>
                            <input type="checkbox" name="php" />PHP
                            <input type="checkbox" name="laravel" />Laravel
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="post" value="POST" /></td>
                    </tr>
                </tbody>
            </table>
        </form>
</body>
</html>