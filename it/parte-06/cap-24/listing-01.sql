CREATE TABLE remember_tokens (
    id         BIGINT       NOT NULL AUTO_INCREMENT,
    user_id    BIGINT       NOT NULL,
    token_hash CHAR(64)     NOT NULL,
    expires_at DATETIME     NOT NULL,
    created_at DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
    user_agent VARCHAR(255),
    ip         VARBINARY(16),
    selector   CHAR(18)     NOT NULL,
    CONSTRAINT pk_remember_me PRIMARY KEY (id),
    CONSTRAINT uq_selector UNIQUE (selector),
    INDEX idx_user_id (user_id)
);
