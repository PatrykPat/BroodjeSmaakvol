<style>

    .navbar {
        position: relative;
        padding: 10px;
    }

    .burger-menu img {
        position: absolute;
        cursor: pointer;
        height: 50px;
        width: 50px;
    }

    .profile-link {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #a0c49d;
        border-radius: 15px;
        border: 1px solid #ccc;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 10px;
        display: none;
        margin-top: 40px;
        z-index: 1;
    }

    .profile-link.active {
        display: block;
        opacity: 1; 
    }

    .profile-link a {
        text-decoration: none;
        color: #333;
    }
</style>

<div class="navbar">
    <div class="burger-menu">
        <img src="images/Hamburger_icon.png" alt="Burger Menu">
        <div class="profile-link">
            <a href="/dashboard" class="icon-link">Profiel</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const burgerMenu = document.querySelector('.burger-menu');

        burgerMenu.addEventListener('click', function() {
            const profileLink = document.querySelector('.profile-link');
            profileLink.classList.toggle('active');
        });
    });
</script>