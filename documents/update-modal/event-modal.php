<div class="modal fade" id="event<?php echo $rowevent['ID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Event</h5>

            </div>
            <form method="post" enctype="multipart/form-data" action="logic/event.php">
                <div class="modal-body">

                    <div class="social">
                        <label class="form-label" for="customFile">name</label>
                        <div class="input-group mb-3">

                            <input type="text" value="<?php echo $rowevent['name'] ?>" name="name" class="form-control tx-area" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>

                    <div class="social">
                        <label class="form-label" for="customFile">title</label>
                        <div class="input-group mb-3">

                            <input type="text" value="<?php echo $rowevent['title'] ?>" name="title" class="form-control tx-area" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </div>
                    <div class="about">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">description</label>
                            <textarea class="form-control tx-area" name="description" id="exampleFormControlTextarea1" rows="3">
                            <?php echo $rowevent['description']; ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="social">
                        <label class="form-label" for="customFile">location</label>
                        <div class="input-group mb-3">
                            <input type="text" value="<?php echo $rowevent['location']; ?>" name="location" class="form-control tx-area" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>

                    <div class="social">
                        <label class="form-label" for="customFile">date</label>
                        <div class="input-group mb-3">
                            <input type="text" value="<?php echo $rowevent['date']; ?>" name="date" class="form-control tx-area" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>

                    <div class="about">
                        <input type="hidden" name="id" value="<?php echo $rowevent['ID']; ?>" class="form-control" id="customFile" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class=" btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>