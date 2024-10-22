CREATE TABLE player_forms (
    player_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR (50),
    last_name VARCHAR (50),
    gender VARCHAR (50),
    nickname VARCHAR (50),
    team_name VARCHAR (50),
    position VARCHAR (50),
    best_hero VARCHAR (50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);