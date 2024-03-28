<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Modal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<!-- PASSWORD RESET MODAL -->
<div class="modal" tabindex="-1" id="resetPasswordModal" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reset Password</h5>
                <button type="button" class="btn-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <!-- Reset Password Form -->
                <form action="/password/reset" method="POST">
                    @csrf
                    <!-- Password Fields -->
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Reset Password</button>
            </div>
        </div>
    </div>
</div>

<!-- Button to Trigger Modal -->
<button id="openResetPasswordModal" class="btn btn-primary">
    Reset Password
</button>

<!-- JavaScript to Handle Modal -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const openModalBtn = document.getElementById('openResetPasswordModal');
        const resetPasswordModal = document.getElementById('resetPasswordModal');
        const closeModalBtns = resetPasswordModal.querySelectorAll('.btn-close');

        openModalBtn.addEventListener('click', function () {
            resetPasswordModal.style.display = 'flex';
        });

        closeModalBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                resetPasswordModal.style.display = 'none';
            });
        });
    });
</script>

<!-- Modal Styles -->
<style>
    body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .modal {
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .modal-dialog {
        background-color: #ffffff;
        width: 80%;
        max-width: 600px;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .modal-title {
        font-size: 24px;
        margin: 0;
    }

    .btn-close {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        padding: 5px;
    }

    .modal-body {
        margin-bottom: 30px;
    }

    .modal-footer {
        display: flex;
        justify-content: flex-end;
    }

    .form-label {
        font-weight: bold;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
    }

    .btn-primary {
        margin-top: 10px;
        background-color: #007bff;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 15px;
        cursor: pointer;
        transition: background-color 0.3s;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .modal-dialog {
            width: 90%;
            padding: 20px;
        }
    }
</style>

</body>
</html>
