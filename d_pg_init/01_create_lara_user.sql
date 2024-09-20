CREATE USER lara_us WITH PASSWORD 'demo';


GRANT ALL PRIVILEGES ON DATABASE "tdme_app_lara" to lara_us;

\c tdme_app_lara

GRANT pg_read_all_data TO lara_us;

GRANT pg_write_all_data TO lara_us;

GRANT ALL ON SCHEMA public TO lara_us;
