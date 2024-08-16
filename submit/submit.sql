
CREATE TABLE submit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    gender VARCHAR(10),
    food VARCHAR(100),
    quote TEXT,
    education VARCHAR(50),
    favorite_time VARCHAR(50)
);
INSERT INTO `submit` (`id`, `name`, `email`, `gender`, `food`, `quote`, `education`, `favorite_time`) VALUES
(1, 'name','email', 'gender', `food`, `quote`, `education`, `favorite_time`);
