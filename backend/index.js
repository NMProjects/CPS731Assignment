const oracledb = require('oracledb')
const config = {
  user: 'user',
  password: '<password>',
  connectString: '//oracle.scs.ryerson.ca:1521/orcl'
}

async function checkConn (empId) {
  let conn

  try {
    conn = await oracledb.getConnection(config)


    console.log("Connected")
  } catch (err) {
    console.error(err)
  } finally {
    if (conn) { // conn assignment worked, need to close
      await conn.close()
    }
  }
}

checkConn()
