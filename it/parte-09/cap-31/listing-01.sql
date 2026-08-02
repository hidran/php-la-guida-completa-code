CREATE TABLE posts (
    id int(10) NOT NULL AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    message text NOT NULL,
    datecreated datetime NOT NULL,
    email varchar(128) NOT NULL,
    PRIMARY KEY (id),
    KEY idx_title (title)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE postscomments (
    id int(12) NOT NULL AUTO_INCREMENT,
    post_id int(10) NOT NULL,
    comment text NOT NULL,
    datecreated datetime NOT NULL,
    email varchar(128) NOT NULL,
    PRIMARY KEY (id),
    KEY idx_post_id (post_id),
    CONSTRAINT fk_post_id
        FOREIGN KEY (post_id) REFERENCES posts (id)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
