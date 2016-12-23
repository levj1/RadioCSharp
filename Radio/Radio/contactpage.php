<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<form>
    <div class="form-group">
        <label for="fullName" class="col-sm-2 control-label">Full Name: </label>
        <div class="col-sm-10">
            <input type="text" name="fullName" id="fullName" class="form-control" />    
        </div>
    </div>
    <div class="form-group">
        <label for="email">Your Email: </label>
        <input type="email" name="fromEmail" id="fromEmail" class="form-control" />        
    </div>
    <div class="form-group">
        <label for="subject">Subject: </label>
        <input type="subject" name="subject" id="subject" class="form-control" />        
    </div>
    <div class="form-group">
        <label for="subject">Message: </label>
        <textarea class="form-control" rows="5" id="message" name="message"></textarea>        
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit" />   
    </div>
</form>