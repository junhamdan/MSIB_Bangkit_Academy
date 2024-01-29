from sqlalchemy import UUID, Column, String
import uuid
from ..database import Base

class User(Base):
  __tablename__ = "users"

  id = Column(UUID(as_uuid=True), primary_key=True, default=uuid.uuid4)
  email = Column(String, nullable=False, unique=True)
  name = Column(String, nullable=False)
  password = Column(String, nullable=False)