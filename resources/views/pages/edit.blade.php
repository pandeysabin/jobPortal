<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
        <!-- <script src="main.js"></script> -->
    </head>
    <body>
        <form method="POST" action="{{ route('job.update', ['id' => $table->id]) }}" onsubmit="return confirm('Are you sure you want to continue?')">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>
                        <label for="jTitle">Job title:</label>
                        <input type="text" name="jTitle" value="{{ $table->jTitle }}" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jDetails">Job Details</label>
                        <input type="text" name="jDetails" value="{{ $table->jDetails }}" cols="20" rows=5 required  />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="skillSet">Skill set</label>
                        <input type="text" name="skillSet" value="{{ $table->skillSet }}" required />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Update" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>