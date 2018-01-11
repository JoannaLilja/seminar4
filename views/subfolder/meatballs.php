<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>The Tasty Recipes Website</title>
  <link rel = "stylesheet" type="text/css" href="../../resources/css/stylesheet.css"/>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://unpkg.com/vue"></script>
</head>
<body>
  <br>
  <H1>The Delicious Recipes Website</H1>
  <br>
  <div class="topnav">
    <a href="FirstPage">Index</a>
    <a href="CalendarPage">Calendar</a>
    <a href="MeatballPage" style = "color: red">Meatballs Recipe</a>
    <a href="PancakePage">Pancakes Recipe</a>
    <a href="LoginPage">Log In</a>
  </div>
  <br>
  <div id="comments">
    <div v-for="comment in comments" class="comment-container">
      <div class="comment-username">
        {{ comment.username }}
        <button v-if="comment.deletable" @click="deleteComment(comment.comment_id)">Delete</button>
      </div>
      <div class="comment-text"> {{ comment.comment }} </div>
    </div>

    <div class="container">
      <label><b>Write a comment</b></label>
      <input class="in" type="text" name="comment" maxlength="200" v-model="commentText" required>
    </div>
    <br>
    <div class="container">
      <button @click="submitComment">Submit</button>
    </div>
  </div>

  <script>
  var app = new Vue({
    el: '#comments',
    data:
    {
      comments: [],
      commentText: '',
    },
    methods: {
      //--------METHODS-------
      getAllComments()
      {
        $.ajax({
          url: '../../resources/api/getComments.php',
          data: {type_id: 1}
        }).done(function(data)
        {
          this.comments = JSON.parse(data);
        }.bind(this))
      },
      postComment()
      {
        $.ajax({
          method: 'POST',
          url: '../../resources/api/postComment.php',
          data:
          {
            type: "meatballs",
            commentText: this.commentText
          }
        }).done(function(data)
        {
          console.log(this)
          console.log('posted comment:' + this.commentText)
          this.commentText="";
          this.getAllComments()
        }.bind(this))
      },

      //----------EVENTS-----------
      submitComment(event)
      {
        this.postComment()
      },
      deleteComment(commentId)
      {
        $.ajax({
          method: 'POST',
          url: '../../resources/api/deleteComment.php',
          data:
          {
            comment_id: commentId
          }
        }).done(function(data)
        {
          console.log("deleted comment with id " + commentId)
          this.getAllComments() //update
        }.bind(this))
      },

    },
    mounted()
    {
      this.getAllComments()
    }
  })
  </script>

</body>
</html>
