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
                {{ csrf_field() }}
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
                            <td><label for="jTitle">Job title:</label></td>
                            <td>
                                <input id="jTitle" type="text" name="jTitle" required  />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="jDetails">Job details:</label></td>
                            <td><textarea type="text" name="jDetails" id="jDetails" cols="20" rows=5 required ></textarea></td>
                        </tr>
                        <tr>
                            <td>Skill set: </td>
                            <td>
                                <input type="text" name="skillSet" value="" size=45 />
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