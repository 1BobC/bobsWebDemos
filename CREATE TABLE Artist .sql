CREATE TABLE Artist (
    artist_id INTEGER NOT NULL AUTO_INCREMENT KEY,
    name VARCHAR (255),
    aalbum_id INTEGER,

    INDEX USING BTREE (name),

    CONSTRAINT FOREIGN KEY (aalbum_id)
    REFERENCES  Aalbum (aalbum_id)
    ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE = InnoDB;