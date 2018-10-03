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
    <div class="jobportal" style="margin:200px 0px 0px 600px;">
        <fieldset style="width:500px; height:auto;">
            <form method="POST" action="{{ route('jobDesc') }}">
                {{csrf_field()}}
                <h1 style="text-align:center;">Job portal</h1>
                <table>
                    <tbody>
                        <tr>
                            <td><label>E-mail:</label></td>
                            <td>
                                <input autofocus type="email" name="email" required />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jobTitle">Job title:</label></td>
                            <td>
                                <input id="jobTitle" type="text" name="jTitle" required  />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jDetails">Job details:</label></td>
                            <td><textarea type="text" name="jobdetails" id="jDetails" cols="20" rows=5 required ></textarea></td>
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
        </fieldset>
    <div>
</body>
</html>