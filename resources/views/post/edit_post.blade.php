
    
<form action="{{ route('post.update',$edit_post->id)}}" method="post">
        @csrf
        @method('PUT')

      
        <input type="text" name="text" value="{{$edit_post->text}}">

        <input type="file" name="image"  value="{{$edit_post->image}}">
      <input type="date" name="data_time"  value="{{$edit_post->data_time}}">
        <button type="submit">Save</button>
    </form>

    
</body>
</html>


