<?php if(isset($_GET['success'])) : ?>

<style>
.toast {
    position: fixed;
    top: 3rem;
    right: 3rem;
    min-width: 34rem;
    padding: 1.6rem 2rem;
    border-radius: 1.4rem;
    color: white;
    z-index: 999999;
    animation:
        toastSlide 0.4s ease,
        toastHide 0.4s ease 4s forwards;
    box-shadow:
        0 15px 40px rgba(0, 0, 0, 0.15);
    backdrop-filter: blur(10px);
    font-family: "Roboto", sans-serif;
}

.toast-success {
    background:
        linear-gradient(135deg,
            #39b972,
            #2ea866);
}

.toast-error {
    background:
        linear-gradient(135deg,
            #ff4d4d,
            #d63031);
}

.toast-content {
    display: flex;
    align-items: center;
    gap: 1.2rem;
}

.toast-icon {
    width: 3rem;
    height: 3rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    font-size: 1.5rem;
    font-weight: bold;
}

.toast-message {
    font-size: 1.6rem;
    font-weight: 500;
}

@keyframes toastSlide {
    from {
        opacity: 0;
        transform: translateX(120%);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes toastHide {
    to {
        opacity: 0;
        transform: translateX(120%);
    }
}
</style>
<div class="toast toast-success">
    <div class="toast-content">
        <span class="toast-icon">
            ✓
        </span>
        <span class="toast-message">
            Quote submitted successfully!
        </span>
    </div>
</div>
<?php endif; ?>
<?php if(isset($_GET['error'])) : ?>
<div class="toast toast-error">

    <div class="toast-content">

        <span class="toast-icon">
            ✕
        </span>

        <span class="toast-message">
            Something went wrong!
        </span>

    </div>

</div>

<?php endif; ?>