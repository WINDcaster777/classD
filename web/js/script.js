document.getElementById('guestbook-form').addEventListener('submit', function(e) {
  e.preventDefault();
  
  var name = document.getElementById('name').value;
  var message = document.getElementById('message').value;
  
  var messageItem = document.createElement('li');
  messageItem.className = 'message-item';
  messageItem.innerHTML = '<p><strong>' + name + ':</strong> ' + message + '</p>';
  
  messageItem.addEventListener('click', function() {
    document.getElementById('viewer-content').innerHTML = '<p><strong>' + name + ':</strong> ' + message + '</p>';
  });
  
  document.getElementById('message-list').appendChild(messageItem);
  
  document.getElementById('guestbook-form').reset();

});

