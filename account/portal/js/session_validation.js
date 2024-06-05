 
      (function() {
        function _check_active_session() {
            let login_user_session_ = JSON.parse(sessionStorage.getItem("login_user_session"));
            if (!login_user_session_ || !login_user_session_.hasOwnProperty("user_id")) {
                _logout();
            }
        }
    
        _check_active_session();
    })();