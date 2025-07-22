const btn = document.getElementById('followBtn');
let isFollowing = false;

btn.addEventListener('click', function (){
    if (!isFollowing) {
        btn.textContent = 'Following';
        isFollowing = true;
    } else {
        btn.textContent = 'Follow';
        isFollowing = false;
    }
})