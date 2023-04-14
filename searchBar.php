<style>
    
.search-bar{
            width: 470px;
            height: 150px;
            position: absolute;
            background-color: #232930;
            top: -40%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 38px;
            border-top: 5px solid #e91e63 ;
            transition: all 0.8s ease;
            z-index: 6000;
        }
        .close-and-text h2{
            font-size: 19px;
            color: #fff;
            font-family: "Montserrat", sans-serif;
        }
        .close-and-text i{
            font-size: 19px;
            padding-top: 5px;
            color: rgb(76, 74, 74);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .close-and-text i:hover{
            color: #fff;
        }
        .close-and-text{
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }
        .search-field{
            display: flex;
        }
        .search-field button{
            width: 10%;
            background-color: #fec53a;
            border: none;
            padding: 7px 10px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .search-field button:hover{
            background-color: #e91e63;
        }
        .search-field button i{
            color: #fff;
        }
        .search-bar input{
            width: 90%;
            padding: 7px 10px;
            border: none;
        }
        @media (max-width: 470px) {
            .search-bar{
                width: 95%;
            }
        }

/*--------------*/
  
</style>
<div class="search-bar" id="searchBar">
        <div class="close-and-text">
            <h2>SEARCH</h2>
            <i class="fa fa-times" aria-hidden="true" onclick="searchBarClose()"></i>    
        </div>
        <div class="search-field">
            <input type="text" placeholder="Type Somthing.................">
            <button type="submit">
                <i class="fa-sharp fa-solid fa-magnifying-glass" ></i>
            </button>
        </div>
</div>
