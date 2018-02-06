<?php include('includes/header.php'); ?>
<form role="form">
                      <div class="form-group">
                        <label>Topic Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                      </div>
                      <div class="form-group">
                        <label>Category</label>
                        <select class="form-control">
                           <option>Design</option>
                           <option>Development</option>
                           <option>Business & Marketing</option>
                           <option>Search Engines</option>
                           <option>Cloud & Hosting</option>
                        </select>
                      </div>
                      <div class="form-control">
                        <label>Topic Body</label>
                        <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
                        <script >CKEDITOR.replace('body');</script>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    
                  



<?php include('includes/footer.php'); ?>