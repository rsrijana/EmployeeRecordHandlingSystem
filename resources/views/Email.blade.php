<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
    <style>
.body{
    margin:0;
    padding:0;
    box-sizing: border-box;
}

.parent_template{
height:100vh;
width:100vw;
display:flex;
align-items:center;
    justify-content:center;

}

.child_template{
    box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.06), 0px 10px 15px rgba(0, 0, 0, 0.1);
    padding:30px;
}
.logo{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    border-bottom: 2px solid #E2E8F0;
    
    
}
.portal_title{
    
    font-family: 'Roboto';
font-style: normal;
font-weight: 700;
font-size: 16px;
text-align: center;
color: #1A202C;
text-shadow: 0px 1px 6px rgba(0, 0, 0, 0.1);
padding:0;
margin:0;

}

.user_name{
    font-family: 'Roboto';
font-style: normal;
font-weight: 500;
font-size: 16px;
color: #0B0B0B;
padding-top:10px;

}
.email_text{
    font-family: 'Roboto';
font-style: normal;
font-weight: 500;
font-size: 16px;
color: #0B0B0B;

}
.user_email{
    color: #4C51BF;
}

.reset_button{
    display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
text-align: center;
margin-left:65px;
margin-top:30px;
margin-bottom:30px;
border:0;
width: 355px;
height: 45px;
background: #4C51BF;
box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.08);
border-radius: 6px;
color:#ffffff;
font-family: 'Roboto';
font-style:normal;
font-weight: 600;
font-size: 15px;
}

.reset_confirm_message{
    font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 16px;
text-align: center;
color: #718096;
margin-bottom:17px;
}
.confirm_message{
    font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 16px;
color: #718096;
text-align: center;
padding:0;
margin:0;
}
    </style>
</head>
<body>
    <div class="parent_template">
        <div class="child_template">
    <div class="logo">
<svg
            width="81"
            height="80"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <circle cx="40.527" cy="40" r="40" fill="url(#a)" />
            <path
                d="M40.387 52.177c.84-4.19.223-8.217.027-12.062-.011 0-.016.005-.022.01.006-.005.011-.01.011-.02-3.85-.107-7.887-.622-12.055.313-5.306 1.195-9.3 5.614-9.22 11.09.042 2.798 1.259 5.284 3.181 7.132 1.89 1.875 4.408 3.038 7.207 3.012 5.48-.048 9.804-4.138 10.871-9.475ZM40.62 27.815c-.817 4.195-.18 8.216.033 12.061.01 0 .016-.005.02-.01-.004.005-.01.01-.01.02 3.85.086 7.887.585 12.056-.37 5.3-1.222 9.273-5.657 9.166-11.138-.053-2.8-1.285-5.28-3.218-7.117-1.901-1.87-4.424-3.017-7.223-2.98-5.475.08-9.782 4.19-10.823 9.534Z"
                fill="#fff"
            />
            <path
                d="M26.866 35.325c3.35.653 6.559.143 9.634-.032 0-.01-.006-.016-.006-.016.006.005.006.01.016.01.064-3.075.462-6.298-.302-9.628-.983-4.233-4.525-7.404-8.901-7.314-2.236.043-4.217 1.03-5.683 2.57-1.492 1.52-2.406 3.538-2.374 5.769.064 4.376 3.351 7.812 7.616 8.64ZM54.062 44.699c-3.35-.654-6.558-.144-9.633.032 0 .01.005.016.005.016-.005-.006-.005-.011-.016-.011-.064 3.075-.462 6.299.303 9.629.977 4.233 4.524 7.404 8.895 7.313 2.236-.042 4.217-1.03 5.683-2.57 1.492-1.52 2.406-3.537 2.374-5.768-.059-4.371-3.346-7.807-7.61-8.641Z"
                fill="#E5E5E5"
            />
            <path
                d="M40.387 52.177c.84-4.19.223-8.217.027-12.062-.011 0-.016.005-.022.01.006-.005.011-.01.011-.02-3.85-.107-7.887-.622-12.055.313-5.306 1.195-9.3 5.614-9.22 11.09.042 2.798 1.259 5.284 3.181 7.132 1.89 1.875 4.408 3.038 7.207 3.012 5.48-.048 9.804-4.138 10.871-9.475ZM40.62 27.815c-.817 4.195-.18 8.216.033 12.061.01 0 .016-.005.02-.01-.004.005-.01.01-.01.02 3.85.086 7.887.585 12.056-.37 5.3-1.222 9.273-5.657 9.166-11.138-.053-2.8-1.285-5.28-3.218-7.117-1.901-1.87-4.424-3.017-7.223-2.98-5.475.08-9.782 4.19-10.823 9.534Z"
                fill="#fff"
            />
            <path
                d="M26.866 35.325c3.35.653 6.559.143 9.634-.032 0-.01-.006-.016-.006-.016.006.005.006.01.016.01.064-3.075.462-6.298-.302-9.628-.983-4.233-4.525-7.404-8.901-7.314-2.236.043-4.217 1.03-5.683 2.57-1.492 1.52-2.406 3.538-2.374 5.769.064 4.376 3.351 7.812 7.616 8.64ZM54.062 44.699c-3.35-.654-6.558-.144-9.633.032 0 .01.005.016.005.016-.005-.006-.005-.011-.016-.011-.064 3.075-.462 6.299.303 9.629.977 4.233 4.524 7.404 8.895 7.313 2.236-.042 4.217-1.03 5.683-2.57 1.492-1.52 2.406-3.537 2.374-5.768-.059-4.371-3.346-7.807-7.61-8.641Z"
                fill="#E5E5E5"
            />
            <defs>
                <linearGradient
                    id="a"
                    x1="40.527"
                    y1="0"
                    x2="40.527"
                    y2="80"
                    gradientUnits="userSpaceOnUse"
                >
                    <stop stop-color="#0457A2" />
                    <stop offset="1" stop-color="#636363" />
                </linearGradient>
            </defs>
        </svg>

        <div class="portal_title">
        <h4><p>IntroCept Employee <br>
        Portal</p>
    </h4>
</div>
</div>

<div class="user_name">
<h4>Hi, {{ $user->name }}</h4>
</div>

<div class="email_text">
<p>We've received a request to set a new password for this<br>
account: <span class="user_email">{{ $user->email }}</span></p>
</div>
    <button class="reset_button" onclick="window.location.href='{{ $token }}'">
    Reset Password</button>

<p class="reset_confirm_message">If you didn't mean to reset your password, then you can just ignore this email<br>
your password will not change.</p>

<h6 class="confirm_message">This message was sent to you by IntroCept<br><br>
<svg width="97" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.546 14.918V.72h1.322V14.92h-1.322v-.002ZM25.473 14.918h-1.165V4.704h1.165v1.42A7.443 7.443 0 0 1 26.921 4.9c.498-.315 1.098-.473 1.796-.473.622 0 1.198.108 1.73.325.53.217.978.595 1.34 1.134.247.368.392.746.437 1.133.045.388.069.793.069 1.212v6.686h-1.165V8.252c0-.92-.202-1.61-.602-2.07-.402-.46-1.07-.69-2.001-.69a2.8 2.8 0 0 0-.991.168c-.298.113-.568.26-.807.444a2.95 2.95 0 0 0-1 1.38c-.116.329-.189.643-.214.947a11.86 11.86 0 0 0-.038.986v5.5h-.002ZM38.643 14.958c-.143.026-.33.072-.563.138a2.852 2.852 0 0 1-.778.098c-.582 0-1.026-.148-1.33-.444-.305-.296-.457-.824-.457-1.588V5.69h-1.417v-.986h1.417v-2.84h1.165v2.838h1.885v.986H36.68v7c0 .25.006.467.02.651.013.184.051.335.116.454a.558.558 0 0 0 .301.256c.136.053.326.08.573.08.156 0 .313-.014.477-.04.16-.025.32-.058.474-.097v.966h.002ZM41.733 14.918h-1.165V4.704h1.166v1.913h.038c.322-.815.74-1.383 1.252-1.705.511-.322 1.189-.482 2.03-.482v1.282c-.662-.013-1.206.092-1.631.315a2.716 2.716 0 0 0-1.02.906c-.255.381-.428.832-.524 1.35a8.92 8.92 0 0 0-.145 1.627v5.008ZM50.98 15.194a5.146 5.146 0 0 1-1.816-.355 4.068 4.068 0 0 1-1.477-1.007c-.42-.447-.754-1.006-1-1.676-.247-.67-.37-1.453-.37-2.347 0-.749.098-1.45.292-2.1.194-.652.485-1.22.873-1.706s.874-.87 1.457-1.154c.582-.281 1.264-.423 2.04-.423.79 0 1.476.142 2.058.423a4.2 4.2 0 0 1 1.457 1.145c.388.48.676 1.048.865 1.705.186.657.28 1.361.28 2.11 0 .815-.11 1.551-.33 2.21a5.015 5.015 0 0 1-.941 1.696c-.408.473-.901.839-1.478 1.094-.572.258-1.21.385-1.91.385Zm3.418-5.383a7.12 7.12 0 0 0-.194-1.696 4.03 4.03 0 0 0-.601-1.37 2.889 2.889 0 0 0-1.05-.917c-.427-.223-.951-.335-1.573-.335-.609 0-1.129.122-1.564.365a3.076 3.076 0 0 0-1.058.965 4.268 4.268 0 0 0-.602 1.38 6.65 6.65 0 0 0-.194 1.608c0 .631.074 1.212.223 1.746.149.531.366.99.65 1.37.285.381.642.677 1.07.887.428.21.919.315 1.477.315.609 0 1.129-.122 1.564-.365a3.035 3.035 0 0 0 1.058-.976 4.41 4.41 0 0 0 .602-1.38 6.62 6.62 0 0 0 .192-1.597ZM67.646 5.02c-.523-2.483-2.564-2.938-3.903-2.938-2.525 0-4.564 1.893-4.564 5.619 0 3.331 1.166 5.894 4.623 5.894 1.224 0 3.34-.59 3.982-3.884h1.825c-.777 5.345-5.049 5.58-6.098 5.58-3.166 0-6.274-2.09-6.274-7.531 0-4.359 2.446-7.374 6.506-7.374 3.593 0 5.458 2.269 5.73 4.632h-1.827v.002ZM80.292 11.685c-.058.493-.524 1.952-1.807 2.82-.466.315-1.127.71-2.759.71-2.854 0-4.545-2.188-4.545-5.165 0-3.194 1.515-5.738 4.875-5.738 2.933 0 4.37 2.366 4.37 6.014h-7.42c0 2.149.99 3.39 2.952 3.39 1.613 0 2.565-1.262 2.623-2.03h1.71Zm-1.631-2.74c-.097-1.598-.758-3.077-2.837-3.077-1.573 0-2.816 1.48-2.816 3.076h5.653ZM82.334 4.606h1.613v1.46h.038c.408-.591 1.186-1.756 3.03-1.756 2.701 0 4.234 2.248 4.234 5.146 0 2.465-1.01 5.756-4.467 5.756-1.36 0-2.253-.651-2.7-1.38h-.039v5.166h-1.709V4.606Zm4.408 9.108c1.865 0 2.738-1.714 2.738-3.982 0-1.321-.136-3.864-2.778-3.864-2.467 0-2.739 2.7-2.739 4.377.002 2.74 1.692 3.47 2.779 3.47ZM95.369 6.045v6.704c0 .807.68.807 1.03.807H97v1.362c-.621.059-1.107.138-1.281.138-1.69 0-2.059-.966-2.059-2.208V6.045h-1.38V4.607h1.38v-2.88h1.709v2.88H97v1.438H95.37ZM7.255 11.74c.286-1.45.076-2.845.009-4.177-.004 0-.006.002-.007.004.001-.002.003-.004.003-.008-1.314-.037-2.691-.215-4.114.109-1.81.414-3.173 1.944-3.146 3.84.014.97.43 1.831 1.086 2.472.645.649 1.504 1.052 2.459 1.043 1.87-.017 3.346-1.433 3.71-3.282ZM7.335 3.302c-.28 1.453-.062 2.846.01 4.178.004 0 .006-.002.008-.004-.002.002-.004.004-.004.008 1.314.029 2.691.202 4.114-.13 1.809-.422 3.165-1.958 3.128-3.857-.018-.97-.438-1.829-1.098-2.465C12.844.384 11.983-.013 11.028 0 9.16.027 7.69 1.45 7.335 3.302ZM2.64 5.904c1.144.226 2.239.05 3.288-.012 0-.003-.002-.005-.002-.005.002.002.002.004.006.004.022-1.066.157-2.182-.104-3.336C5.493 1.09 4.284-.009 2.791.022 2.028.037 1.35.38.85.912a2.803 2.803 0 0 0-.81 1.998c.022 1.516 1.144 2.707 2.6 2.994ZM11.922 9.15c-1.144-.226-2.239-.05-3.288.011 0 .004.002.006.002.006-.002-.002-.002-.004-.006-.004-.021 1.065-.157 2.182.104 3.335.333 1.466 1.544 2.565 3.035 2.534.763-.015 1.44-.357 1.94-.89.509-.527.82-1.226.81-1.999-.02-1.514-1.142-2.704-2.597-2.993Z" fill="#718096"/></svg>
</h6>
</div>
</div>
</body>
</html>