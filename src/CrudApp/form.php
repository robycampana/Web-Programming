<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php if(isset($title) && !empty($title)) 
        {
            echo $title;
        }
        else
        {
            echo "CRUD App";
        }
        ?>
    </title>
</head>

<body>
    <h2>Input Your Information Below:</h2>
    <form name="form1" method="post" action="">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
                </div>
                <div class="col">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
                </div>
                <div class="col">
                    <label for="groupid">Group ID:</label>
                    <select class="form-control" id="groupid" name="groupid">
                        <option value="BBCAP19">BBCAP19</option>
                        <option value="BBCAP20">BBCAP20</option>
                        <option value="BBCAP21">BBCAP21</option>
                        <option value="BBCAP22">BBCAP22</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>