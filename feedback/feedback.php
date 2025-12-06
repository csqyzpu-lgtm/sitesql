<?php include 'inc/header.php'; ?>  

   <?php 
   /*first test with hard-coded database
        $feedback = [
            [
                'id'=> '1',
                'name' => 'Ana',
                'email' => 'ana@gmail.com',
                'body' => 'nice enough'
            ],
            [
                'id' => '2',
                'name' => 'Gaetan',
                'email' => 'gaetan@gmail.com',
                'body' => 'pas mal'
            ],
            [
                'id' => '3',
                'name' => 'Lily',
                'email' => 'lily@gmail.com',
                'body' => 'wow'
            ],

        ];
    */
    //select  all from the feedback table
    $sql = 'SELECT * FROM feedback';
    //get the result
    $result = mysqli_query($conn, $sql);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
    
    
        <h2>Past Feedback</h2>

        <?php if(empty($feedback)): ?>
        <p class="lead mt3">There is no Feedback</p>
        <?php endif; ?>

        <?php foreach($feedback as $item): ?>

        <div class="card my-3 w-75">
        <div class="card-body  text-center">
        <?php echo $item['body'];?>
        <div class="text-secondary mt-2">
            review by <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
        </div>
        </div>
        </div>
        <?php endforeach; ?>

    
        <?php include 'inc/footer.php'; ?>
